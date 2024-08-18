<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekController extends CI_Controller {

	
	public function index()
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', 'localhost:8080/api/proyek');
		$data['response_data'] = json_decode($response->getBody(), true);
		$this->load->view('data/proyek/data_proyek', $data);
	}


	public function createDataProyek ()
	{
			$this->load->view('data/proyek/create_proyek');
	}

		public function editDataProyek ($id)
	{
			$client = new \GuzzleHttp\Client();
			$response = $client->request('GET', 'localhost:8080/api/proyek/'.$id);
			$data['response_data'] = json_decode($response->getBody(), true);
			// die(print_r($data));

			$this->load->view('data/proyek/edit_proyek', $data);
	}

	public function storeDataProyek() {
		// die(print_r($this->input->post()));
		 $client = new \GuzzleHttp\Client();

		 $data = array(
			'namaProyek' => $this->input->post('nameProyek'),
			'client' => $this->input->post('client'),
			'tglMulai' => "2024-08-16T11:06:54",
			'tglSelesai' => "2024-08-16T11:06:54",
			'pimpinanProyek' => $this->input->post('pimpinanProyek'),
			'keterangan' => $this->input->post('keterangan'),
		);

        try {
            $response = $client->request('POST', 'http://localhost:8080/api/proyek', [
                'json' => $data 
            ]);

            $responseBody = $response->getBody()->getContents();
            // echo "Response: " . $responseBody;
			// die();
			redirect('ProyekController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
    }

		public function updateDataProyek($id) {
		// die(print_r($this->input->post()));
		 $client = new \GuzzleHttp\Client();
		 $data = array(
			'namaProyek' => $this->input->post('namaProyek'),
			'client' => $this->input->post('client'),
			'tglMulai' =>"2024-08-18T00:00:00",
			'tglSelesai' => "2024-08-18T00:00:00",
			'pimpinanProyek' => $this->input->post('pimpinanProyek'),
			'keterangan' => $this->input->post('keterangan'),
			'createdAt' => "2024-08-18T17:19:32",
		);

		// die(print_r($data));

        try {
            $response = $client->request('PUT', 'http://localhost:8080/api/proyek/'.$id, [
                'json' => $data 
            ]);

            $responseBody = $response->getBody()->getContents();
			redirect('ProyekController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
    }

	public function deleteDataProyek($id)
	{
		$client = new \GuzzleHttp\Client();

		try {
			$response = $client->request('DELETE', 'localhost:8080/api/proyek/'.$id);
            $responseBody = $response->getBody()->getContents();
			redirect('ProyekController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
	}
}
