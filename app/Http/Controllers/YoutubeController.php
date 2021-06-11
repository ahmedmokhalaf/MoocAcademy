<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class YoutubeController extends Controller
{
	//
	public function index()
	{
		Youtube::setApiKey('AIzaSyBGqqeQIYi8HppU42d7mE-lRY68aPVwWFE');
		$videoList = Youtube::getPlaylistItemsByPlaylistId('PLDoPjvoNmBAz_Wl1DwxbagADmii_IJ1vY');
		return $videoList;
		// https://www.youtube.com/watch?v=c8vpPwpAc3c
		// http://www.youtube.com/watch?v=c8vpPwpAc3c&t=1m30s
	}
}
