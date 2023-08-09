<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'https://images.unsplash.com/photo-1488590528505-98d2b5aba04b',
            'https://images.unsplash.com/photo-1494252713559-f26b4bf0b174',
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            'https://images.unsplash.com/photo-1519241047957-be31d7379a5d',
            'https://images.unsplash.com/photo-1551434678-e076c223a692',
            'https://images.unsplash.com/photo-1579403124614-197f69d8187b',
        ];

        $user = User::first();


        foreach ($images as $image) {
            $attachment = Attachment::create([
                'file_path' => $image,
                'file_name' => 'attachment',
                'file_alt' => 'Imagen de prueba',
                'file_caption' => 'Foto de Unsplash',
                'file_size' => '1500',
                'mime_type' => 'image/jpeg',
                'thumbnail_path' => '',
                'storage_path' => '',
                'attachable_id' => $user->id,
                'attachable_type' => 'App\Models\User',
                'user_id' => $user->id,
            ]);

            $attachment->update([
                'file_name' => 'attachment_'.$attachment->id,
            ]);
        }

    }
}
