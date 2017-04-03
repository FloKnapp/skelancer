<?php
/**
 * Class ApiController | ApiController.php
 * @package App\Controller
 * @author  Florian Knapp <office@florianknapp.de>
 */
namespace App\Controller;

use Faulancer\Controller\RestfulController;
use Faulancer\Http\JsonResponse;
use Faulancer\Http\XmlResponse;

/**
 * Class ApiController
 */
class ApiController extends RestfulController
{

    /**
     * @param mixed $id
     * @return XmlResponse
     */
    public function get($id = null)
    {
        return new XmlResponse([
            'testnode' => [
                 '@attributes' => [
                     'param1' => 'test1',
                     'param2' => 'test2'
                 ],
                'value' => 'testvalue'
            ],
            'testnode2' => [
                '@attributes' => [
                    'param1' => 'test1'
                ],
                'value' => [
                    'subnode2' => [
                        '@attributes' => [
                            'subparam' => 'subparam2'
                        ],
                        'value' => 'subvalue2'
                    ]
                ]
            ]
        ]);
    }

    /**
     * @param mixed $id
     * @return JsonResponse
     */
    public function delete($id = null)
    {
        return new JsonResponse(['test']);
    }

    /**
     * @param mixed $data
     * @return JsonResponse
     */
    public function create($data = null)
    {
        return new JsonResponse(['param' => $data]);
    }

}