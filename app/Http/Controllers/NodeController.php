<?php

namespace App\Http\Controllers;

use App\DockerHelper;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class NodeController extends Controller
{
    private $helper;

    public function __construct(DockerHelper $dockerHelper)
    {
        $this->helper = $dockerHelper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dockerIp = $this->helper->findContainerIp($id);
        $nodeList = \Httpful\Request::get("http://" . $dockerIp . ":8080/discovery")->expectsJson()->send();

        $thingData = [];
        foreach ($nodeList->body as $key => $value) {
            foreach ($value->things as $thing) {
                $params = ['rpi_id' => $key, 'states' => [$thing->type], 'device_id' => $thing->id, 'type' => 'temperature'];
                $newData = \Httpful\Request::post("http://" . $dockerIp . ":8080/thing", json_encode($params))->sendsJson()->send();
                array_push($thingData, json_decode($newData->body));
            }

        }

        $lamps = [];
        foreach ($nodeList->body as $key => $value) {
            foreach ($value->things as $thing) {
                array_push($lamp, json_decode($newData->body));
            }

        }

        return view('home')->with('devices', $nodeList->body)->with('logs', $thingData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dockerIp = $this->helper->findContainerIp($id);
        $response = \Httpful\Request::put("http://" . $dockerIp . ":8080/thing", $request->body)->expectsJson()->send();
        return $response;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
