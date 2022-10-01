<?php

namespace App\Controller;

use App\Entity\CheckAttendance;
use App\Form\CheckAttendanceType;
use App\Repository\CheckAttendanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/check/attendance")
 */
class CheckAttendanceController extends AbstractController
{
    /**
     * @Route("/", name="app_check_attendance_index", methods={"GET"})
     */
    public function index(CheckAttendanceRepository $checkAttendanceRepository): Response
    {
        return $this->render('check_attendance/index.html.twig', [
            'check_attendances' => $checkAttendanceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_check_attendance_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CheckAttendanceRepository $checkAttendanceRepository): Response
    {
        $checkAttendance = new CheckAttendance();
        $form = $this->createForm(CheckAttendanceType::class, $checkAttendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $checkAttendanceRepository->add($checkAttendance, true);

            return $this->redirectToRoute('app_check_attendance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('check_attendance/new.html.twig', [
            'check_attendance' => $checkAttendance,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_check_attendance_show", methods={"GET"})
     */
    public function show(CheckAttendance $checkAttendance): Response
    {
        return $this->render('check_attendance/show.html.twig', [
            'check_attendance' => $checkAttendance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_check_attendance_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CheckAttendance $checkAttendance, CheckAttendanceRepository $checkAttendanceRepository): Response
    {
        $form = $this->createForm(CheckAttendanceType::class, $checkAttendance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $checkAttendanceRepository->add($checkAttendance, true);

            return $this->redirectToRoute('app_check_attendance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('check_attendance/edit.html.twig', [
            'check_attendance' => $checkAttendance,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_check_attendance_delete", methods={"POST"})
     */
    public function delete(Request $request, CheckAttendance $checkAttendance, CheckAttendanceRepository $checkAttendanceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$checkAttendance->getId(), $request->request->get('_token'))) {
            $checkAttendanceRepository->remove($checkAttendance, true);
        }

        return $this->redirectToRoute('app_check_attendance_index', [], Response::HTTP_SEE_OTHER);
    }
}
