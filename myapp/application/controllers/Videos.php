<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {
  public function get_hero_content()
  {
    return array(
      "title" => "Rex Goliath",
      "subtitle" => "His Royal Majesty is back, sucker!",
      "image_url" => "https://sika-wineflix.web.app/rex-goliath-logo.png",
      "description" => "America's most unhinged rooster is out of retirement, and this time? He's mad as hell. Experience the unapologetic flavor burst of Rex Goliath.",
    );
  }

  public function get_videos()
  {
    return array(
      array(
        "id" => 1,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "is_new" => true,
        "label" => "Wine",
        "is_finished" => true,
        "progress" => 0,
      ),
      array(
        "id" => 2,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_finished" => true,
        "is_new" => false,
        "progress" => 0,
      ),
      array(
        "id" => 3,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_new" => true,
        "is_finished" => true,
        "progress" => 0,
      ),
      array(
        "id" => 4,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_finished" => true,
        "is_new" => false,
        "progress" => 0,
      ),
      array(
        "id" => 5,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_new" => true,
        "is_finished" => true,
        "progress" => 0,
      ),
      array(
        "id" => 6,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_finished" => true,
        "is_new" => false,
        "progress" => 0,
      ),
      array(
        "id" => 7,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_finished" => true,
        "is_new" => false,
        "progress" => 0,
      ),
      array(
        "id" => 8,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "label" => "Wine",
        "is_finished" => true,
        "is_new" => false,
        "progress" => 0,
      ),
      array(
        "id" => 1,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 2,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 3,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 4,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 5,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 6,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 7,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
      array(
        "id" => 8,
        "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
        "progress" => 22,
        "label" => "Wine",
        "is_new" => false,
        "is_finished" => false,
      ),
    );
  }

	public function index()
	{
    $data['hero_content'] = $this->get_hero_content();
    $data['videos'] = $this->get_videos();

    $this->load->helper('url');
		$this->load->view('html_head');
		$this->load->view('components/user_avatar');
		$this->load->view('components/hero_title');
		$this->load->view('app', $data);
		$this->load->view('html_foot');
	}
}
