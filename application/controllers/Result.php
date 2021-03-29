<?php

class Result extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Edu_model', 'edu_model');
		$this->load->model('Visitor_model', 'visitor_model');
		$this->visitor_model->count_visitor();
		$this->load->helper('text');
		error_reporting(0);
	}
	function index()
	{
		redirect('edu');
	}

	function search()
	{
		$query = strip_tags(htmlspecialchars($this->input->get('search_query', TRUE), ENT_QUOTES));
		$result = $this->edu_model->search_edu($query);
		if ($result->num_rows() > 0) {
			$x['data'] = $result;
			$x['judul'] = 'Hasil Pencarian :' . ' "' . $query . '"';
		} else {
			$x['data'] = $result;
			$x['judul'] = 'Hasil Pencarian : "Tidak Temukan"';
		}
		$x['populer_post'] = $this->edu_model->get_popular_post();
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$x['icon'] = $site_info->site_favicon;
		$x['header'] = $this->load->view('header', $v, TRUE);
		$x['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('edu_search_view', $x);
	}
}
