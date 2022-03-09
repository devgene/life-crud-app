<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait ApiResponse
{
	/**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
	protected function success($data, string $message = null, int $code = 200)
	{
		return response()->json([
			'status' => true,
			'message' => $message,
			'data' => $data,
            'status_code'=>$code
		], $code);
	}

    /**
     * Return a success JSON response.
     *
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function general_success(string $message = null, int $code = 200)
	{
		return response()->json([
			'status' => true,
			'message' => $message,
            'status_code'=>$code
		], $code);
	}

	/**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
	protected function error(string $message = null, int $code)
	{
		return response()->json([
			'status' => false,
			'message' => $message,
            'status_code'=>$code
		], $code);
	}


    public  function validationResponse($validator){
        $response = [
            'status'      => false,
            'message'     => $validator->errors()->first(),
            'status_code'=>422
        ];
        throw new HttpResponseException(response()->json( $response , 422));
    }

}
