<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiController extends CI_Controller {

	
	public function index()
	{
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', 'localhost:8080/api/lokasi');
		$data['response_data'] = json_decode($response->getBody(), true);
		$this->load->view('data/lokasi/data_lokasi', $data);
	}


	// View Input Data
	public function createDataLokasi ()
	{
			$this->load->view('data/lokasi/create_lokasi');
	}
	

	// View Input Data
	public function editDataLokasi ($id)
	{
			$client = new \GuzzleHttp\Client();
			$response = $client->request('GET', 'localhost:8080/api/lokasi/'.$id);
			$data['response_data'] = json_decode($response->getBody(), true);
			// die(print_r($data));

			$this->load->view('data/lokasi/edit_lokasi', $data);
	}

	// Data Save function
	public function storeDataLokasi() {
		// die(print_r($this->input->post()));
		 $client = new \GuzzleHttp\Client();

		 $data = array(
			'namaLokasi' => $this->input->post('namaLokasi'),
			'negara' => $this->input->post('negara'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'createdAt' => "2024-08-18T17:19:32",
		);

        try {
            $response = $client->request('POST', 'http://localhost:8080/api/lokasi', [
                'json' => $data 
            ]);

            $responseBody = $response->getBody()->getContents();
            // echo "Response: " . $responseBody;
			// die();
			redirect('LokasiController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
    }

	// Update Data
	public function updateDataLokasi($id) {
		// die(print_r($this->input->post()));
		 $client = new \GuzzleHttp\Client();

		 $data = array(
			'namaLokasi' => $this->input->post('nameLokasi'),
			'negara' => $this->input->post('negara'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'createdAt' => "2024-08-18T17:19:32",
		);

		// die(print_r($data));

        try {
            $response = $client->request('PUT', 'http://localhost:8080/api/lokasi/'.$id, [
                'json' => $data 
            ]);

            $responseBody = $response->getBody()->getContents();
			redirect('LokasiController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
    }

	public function deleteDataLokasi($id)
	{
		$client = new \GuzzleHttp\Client();

		try {
			$response = $client->request('DELETE', 'localhost:8080/api/lokasi/'.$id);
            $responseBody = $response->getBody()->getContents();
			redirect('LokasiController');
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
        }
	}
	
}
