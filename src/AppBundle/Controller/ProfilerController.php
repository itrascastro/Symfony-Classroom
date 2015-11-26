<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class ProfilerController extends Controller
{
    /**
     * Save the selected translation to resources.
     *
     * @Route("/{token}/translation/save", name="_profiler_save_translations")
     *
     * @return Response A Response instance
     */
    public function saveAction(Request $request, $token)
    {
        if (!$request->isXmlHttpRequest()) {
            return $this->redirectToRoute('_profiler', ['token' => $token]);
        }
        $profiler = $this->get('profiler');
        $profiler->disable();
        $selected   = $request->request->get('selected');
        if (!$selected || count($selected) == 0) {
            return new Response('No key selected.');
        }
        $profile    = $profiler->loadProfile($token);
        $all        = $profile->getCollector('translation');
        $assets     = array_intersect_key($all->getMessages(), array_flip($selected));

        foreach ($assets as $asset) {
            $name = $asset['id'];
            exec("curl -F 'name=$name' -F 'id=$name' 'https://localise.biz/api/assets' -u d70604a51ebad89d956d2b6d08be9076:" . $this->getParameter('translation_loco_password'));
        }

        if (true) {
            return new Response(sprintf("%s translation keys saved!", count($selected)));
        } else {
            return new Response("Can't save the translations.");
        }
    }
}