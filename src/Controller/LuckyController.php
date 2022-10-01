<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/lucky")
 */
class LuckyController extends AbstractController
{
    /**
     * @Route("/number", name="app_lucky_random", methods={"GET"})
     */

    public function number(): Response
    {
        $number = random_int(0, 100);
        //
        //        return new Response(
        //            '<html><body>Lucky number: '.$number.'</body></html>'
        //        );

        $items = array("Coca", "Sting", "Coffee", "Redbull");
        $rand_item = $items[array_rand($items)];

        return new Response(
            '<html><body>
                Lucky drink: ' . $rand_item . '
                <br/>
                Lucky number: ' . $number . '
                </body></html>'
        );
    }


    /**
     * @Route("/greeting", name="app_lucky_random", methods={"GET"})
     */
    public function greeting(): Response
    {
        $greeting = "Hi there!";
        return new Response(
            '<html lang="html"><body>Hi There!</body><html>'
        );
    }

    /**
     * @Route("/welcome", name="app_lucky_random", methods={"GET"})
     */
    public function welcome(): Response
    {
        $welcome_word = "";
        return $this->render(
            'lucky/welcome.html.twig',
            [
                'welcome_word' => $welcome_word,
            ]
        );
    }

    /**
     * @Route("/hiengio", name="app_lucky_random", methods={"GET"})
     */
    public function getdate(): Response
    {
        $today = "Today is: ";
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $today = date('Y-m-d H:i:s');
        return new Response(
            '<html><body>Today is: ' . $today . '</body></html>'
        );
    }


    //datePicker button
    /**
     * @Route("/download", name="app_download", methods={"GET"})
     */
    public function download(): BinaryFileResponse
    {
        // send the file contents and force the browser to download it
        $projectDir = $this->getParameter('kernel.project_dir').'/public/'; //kernel.project_dir = ten project o ngoai cung, khog can modify
        return $this->file($projectDir.'/binaries/xh.pdf');
    }

}