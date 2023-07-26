<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Service\UnloadUserToExcel;
use App\Service\UserWithWeather;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    //получаем всех пользователей + роль
    #[Route('/', name: 'app_user')]
    public function index(Request $request, UserRepository $userRepository, UserWithWeather $userWithWeather): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userWithWeather->updateUserWithWeather(),
        ]);
    }

    //добавляем нового ползователя
    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/form.html.twig', [
            'user' => $user,
            'form' => $form,
            'title'=>'Новый пользователь',
        ]);
    }

    //редактируем пользователя
    #[Route('/edit/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);
            return $this->redirectToRoute('app_user', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/form.html.twig', [
            'user' => $user,
            'form' => $form,
            'title'=>'Редактирование пользователя',
        ]);
    }

    //удаляем пользователя
    #[Route('/delete/{id}', name: 'app_user_delete', methods: ['GET'])]
    public function delete(string $id, Request $request, User $user, UserRepository $userRepository): Response
    {
        $userRepository->remove($user, true);
        die(json_encode(array('text' => 'Пользователь успешно удален из базы',
            'id'=>$id,
            'title'=>'Результат',
            'button'=>'Отлично!',
            'color'=>'#04bf23'
        )));
    }


    #[Route('/xlsx', name: 'app_user_xlsx', methods: ['GET'])]
    public function exl(Request $request, UnloadUserToExcel $unloadUserToExcel): Response
    {
        $file_options = $unloadUserToExcel->unload();
        return $this->file($file_options[0], $file_options[1], ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
