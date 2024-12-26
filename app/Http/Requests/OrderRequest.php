<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->id) {
            // Rules untuk update
            return [
                // 'user_id' => 'required|exists:users,id',
                'driver_id' => 'nullable|exists:users,id',
                // 'pick_location' => 'required|string|max:255',
                // 'des_location' => 'required|string|max:255',
                'distance' => 'nullable|numeric|min:0',
                'price' => 'nullable|numeric|min:0',
                'rating' => 'nullable|numeric|min:1|max:5',
                'status' => 'required|in:pending,accepted,in_progress,completed,cancelled',
            ];
        }

        return [
            'pick_location' => 'required|string|max:255',
            'des_location' => 'required|string|max:255',
        ];
    }
}
