<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_transaksi extends CI_Model
{

    public $urls = 'http://localhost:3000/s';
    public $urlsd = 'http://localhost:3000/sd';

    public function views()
    {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urls,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);

    }

    public function getIds($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urls.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    public function adds($data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urls,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    public function updates($id, $data)
    {
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urls.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    // hapus data siswa

    public function deletes($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urls.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }


    public function viewsd()
    {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urlsd,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);

    }

    public function getIdsd($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urlsd.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    public function addsd($data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urlsd,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    public function updatesd($id, $data)
    {
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urlsd.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }

    // hapus data siswa

    public function deletesd($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->urlsd.'/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
        ));

        $output = curl_exec($curl);
        
        if (curl_errno($curl)) {
            echo curl_errno($curl);
        }
        curl_close($curl);

        return $hasil = json_decode($output);
    }
}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-03 10:36:06 */
/* http://harviacode.com */