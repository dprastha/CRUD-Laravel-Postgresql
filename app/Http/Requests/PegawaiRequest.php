<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_pegawai' => 'required|integer',
            'nama' => 'required|max:255',
            'jumlah_surat_masuk' => 'integer|nullable',
            'jumlah_surat_keluar' => 'integer|nullable',
        ];
    }
}
