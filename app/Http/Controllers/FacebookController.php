<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FacebookController extends Controller
{
    public function store(Request $request,Facebook $fb) //method injection
    {
        // retrieve form input parameters
        $uid = $request->input('uid');
        $access_token = $request->input('access_token');
        $permissions = $request->input('permissions');

        Log::debug('uid = ' . $uid);
        Log::debug($access_token);
        Log::debug($permissions);
        // assuming we have a User model already set up for our database
        // and assuming facebook_id field to exist in users table in database
        //$user = User::firstOrCreate(['facebook_id' => $uid]);  ------

        // get long term access token for future use
        $oAuth2Client = $fb->getOAuth2Client();

        // assuming access_token field to exist in users table in database
        //$user->access_token = $oAuth2Client->getLongLivedAccessToken($access_token)->getValue();----
        //$user->save(); ----

        $access_token = $oAuth2Client->getLongLivedAccessToken($access_token)->getValue();
        Log::debug($access_token);
        // set default access token for all future requests to Facebook API            
        //$fb->setDefaultAccessToken($user->access_token); --
        $fb->setDefaultAccessToken($access_token);

        // call api to retrieve person's public_profile details
        $fields = "id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified";
        $fb_user = $fb->get('/me?fields='.$fields)->getGraphUser();
        dump($fb_user);
    } 
    
    public function postLink(Request $request,Facebook $fb) //method injection
    {
        // retrieve form input parameters
        $uid = $request->input('uid');
        $access_token = $request->input('access_token');
        $permissions = $request->input('permissions');

        Log::debug('uid = ' . $uid);
        Log::debug($access_token);
        Log::debug($permissions);
        // assuming we have a User model already set up for our database
        // and assuming facebook_id field to exist in users table in database
        //$user = User::firstOrCreate(['facebook_id' => $uid]);  ------

        // get long term access token for future use
        $oAuth2Client = $fb->getOAuth2Client();

        // assuming access_token field to exist in users table in database
        //$user->access_token = $oAuth2Client->getLongLivedAccessToken($access_token)->getValue();----
        //$user->save(); ----

        $access_token = $oAuth2Client->getLongLivedAccessToken($access_token)->getValue();
        Log::debug($access_token);
        // set default access token for all future requests to Facebook API            
        //$fb->setDefaultAccessToken($user->access_token); --
        $fb->setDefaultAccessToken($access_token);

        // call api to retrieve person's public_profile details
        //$fields = "id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified";
        //$fb_user = $fb->get('/me?fields='.$fields)->getGraphUser();
        $linkData = [
            'link' => 'http://www.google.com',
            'message' => 'User provided message',
            ];
          
          try {
            // Returns a `Facebook\Response` object
            $response = $fb->post('/me/feed', $linkData, $access_token);
          } catch(FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }
          
          $graphNode = $response->getGraphNode();
          
          echo 'Posted with id: ' . $graphNode['id'];
        dump($response);
    }

    
}
