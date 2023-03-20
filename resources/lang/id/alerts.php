<?php

return array (
  'backend' =>
  array (
    'general' =>
    array (
      'created' => 'Berhasil dibuat.',
      'slug_exist' => 'slug memiliki yang sama, harap perbarui slug.',
      'error' => 'Ada yang salah. Coba lagi',
      'updated' => 'Berhasil diperbarui.',
      'deleted' => 'Berhasil dihapus.',
      'restored' => 'Berhasil dipulihkan.',
      'cancelled' => 'Pembaruan Dibatalkan.',
      'unverified' => 'File Pembaruan yang Tidak Diverifikasi.',
      'backup_warning' => 'Harap isi detail yang diperlukan untuk cadangan',
      'delete_warning' => 'Anda tidak dapat menghapus kursus. Siswa sudah terdaftar. Batalkan publikasi kursus sebagai gantinya',
      'delete_warning_bundle' => 'Anda tidak dapat menghapus Bundel. Siswa sudah terdaftar. Batalkan publikasi Bundel sebagai gantinya',
      'teacher_delete_warning' => 'Anda tidak dapat menghapus guru. Kursus sudah ditambahkan. Ganti statusnya',
    ),
    'roles' =>
    array (
      'created' => 'Peran berhasil dibuat.',
      'updated' => 'Peran berhasil diperbarui.',
      'deleted' => 'Peran berhasil dihapus.',
    ),
    'users' =>
    array (
      'cant_resend_confirmation' => 'Aplikasi saat ini disetel untuk menyetujui pengguna secara manual.',
      'confirmation_email' => 'Email konfirmasi baru telah dikirim ke alamat yang tercatat.',
      'confirmed' => 'Pengguna berhasil dikonfirmasi.',
      'unconfirmed' => 'Pengguna berhasil dibatalkan konfirmasinya',
      'created' => 'Pengguna berhasil dibuat.',
      'updated' => 'Pengguna berhasil diperbarui.',
      'deleted' => 'Pengguna berhasil dihapus.',
      'updated_password' => 'Kata sandi pengguna berhasil diperbarui.',
      'session_cleared' => 'Sesi pengguna berhasil dihapus.',
      'social_deleted' => 'Akun Sosial Berhasil Dihapus',
      'deleted_permanently' => 'Pengguna telah dihapus secara permanen.',
      'restored' => 'Pengguna berhasil dipulihkan.',
    ),
    'stripe_plan' => array(
      'stripe_credentials' => 'Kredensial Stripe tidak tersedia'
    )
  ),
  'frontend' =>
  array (
    'contact' =>
    array (
      'sent' => 'Informasi Anda berhasil dikirim. Kami akan membalas email yang diberikan sesegera mungkin.',
    ),
    'course' =>
    array (
      'completed' => 'Selamat! Anda telah berhasil menyelesaikan kursus. Periksa sertifikat Anda di dashboard',
      'slot_booking' => 'Pemesanan slot pelajaran langsung berhasil',
      'subscription_plan_expired' => 'Paket Langganan Anda Kedaluwarsa',
      'subscription_plan_cancelled' => 'Paket Langganan Anda Dibatalkan',
      'sub_course_limit_over' => 'Batas Kursus Rencana Berlangganan Anda Berakhir',
      'sub_bundle_limit_over' => 'Batas Paket Langganan Anda Berakhir',
      'sub_course_success' => 'Kursus Berlangganan Berhasil',
      'sub_bundle_success' => 'Bundel Berlangganan Berhasil',
      'sub_course_not_access' => 'Paket Langganan Anda Bukan Akses Kursus Apa Pun',
      'sub_bundle_not_access' => 'Paket Langganan Anda Bukan Akses Bundel Apa Pun',
    ),
    'duplicate_course' => 'kursus sudah dibeli',
    'duplicate_bundle' => 'bundel sudah dibeli',
    'wishlist' => array(
        'exist' => 'Kursus ini sudah ada di wishlist',
        'added' => 'Kursus berhasil ditambahkan ke wishlist'
    )
  ),
);
