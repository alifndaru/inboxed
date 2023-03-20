<?php

return array (
  'backend' => 
  array (
    'access' => 
    array (
      'roles' => 
      array (
        'cant_delete_admin' => 'Anda tidak dapat menghapus peran Administrator.',
        'needs_permission' => 'Anda harus memilih setidaknya satu izin untuk peran ini.',
        'create_error' => 'Terjadi masalah saat membuat peran ini. Silakan coba lagi.',
        'update_error' => 'Terjadi masalah saat memperbarui peran ini. Silakan coba lagi.',
        'already_exists' => 'Peran itu sudah ada. Silakan pilih nama yang berbeda.',
        'delete_error' => 'Terjadi masalah saat menghapus peran ini. Silakan coba lagi.',
        'has_users' => 'Anda tidak dapat menghapus peran dengan pengguna terkait.',
        'not_found' => 'Peran itu tidak ada.',
      ),
      'users' => 
      array (
        'already_confirmed' => 'Pengguna ini sudah dikonfirmasi.',
        'cant_delete_own_session' => 'Anda tidak dapat menghapus sesi Anda sendiri.',
        'session_wrong_driver' => 'Driver sesi Anda harus diatur ke database untuk menggunakan fitur ini.',
        'social_delete_error' => 'Terjadi masalah saat menghapus akun sosial dari pengguna.',
        'role_needed_create' => 'Anda harus memilih setidaknya satu peran.',
        'create_error' => 'Terjadi masalah saat membuat pengguna ini. Silakan coba lagi.',
        'update_error' => 'Terjadi masalah saat memperbarui pengguna ini. Silakan coba lagi.',
        'update_password_error' => 'Terjadi masalah saat mengubah sandi pengguna ini. Silakan coba lagi.',
        'cant_deactivate_self' => 'Anda tidak dapat melakukan itu pada diri Anda sendiri.',
        'mark_error' => 'Terjadi masalah saat memperbarui pengguna ini. Silakan coba lagi.',
        'cant_confirm' => 'Terjadi masalah saat mengonfirmasi akun pengguna.',
        'not_confirmed' => 'Pengguna ini tidak dikonfirmasi.',
        'cant_unconfirm_admin' => 'Anda tidak dapat membatalkan konfirmasi administrator super.',
        'cant_unconfirm_self' => 'Anda tidak dapat membatalkan konfirmasi sendiri.',
        'delete_first' => 'Pengguna ini harus dihapus terlebih dahulu sebelum dapat dimusnahkan secara permanen.',
        'delete_error' => 'Terjadi masalah saat menghapus pengguna ini. Silakan coba lagi.',
        'cant_restore' => 'Pengguna ini tidak dihapus sehingga tidak dapat dipulihkan.',
        'restore_error' => 'Terjadi masalah saat memulihkan pengguna ini. Silakan coba lagi.',
        'email_error' => 'Alamat email itu milik pengguna lain.',
        'not_found' => 'Pengguna itu tidak ada.',
        'cant_delete_admin' => 'Anda tidak dapat menghapus administrator super.',
        'cant_delete_self' => 'Anda tidak dapat menghapus diri sendiri.',
        'role_needed' => 'Anda harus memilih setidaknya satu peran.',
      ),
    ),
  ),
  'frontend' => 
  array (
    'auth' => 
    array (
      'confirmation' => 
      array (
        'success' => 'Akun Anda telah berhasil dikonfirmasi!',
        'already_confirmed' => 'Akun Anda sudah dikonfirmasi.',
        'resent' => 'Email konfirmasi baru telah dikirim ke alamat yang tercatat.',
        'pending' => 'Akun Anda sedang menunggu persetujuan.',
        'resend' => 'Akun Anda tidak dikonfirmasi. Silakan klik tautan konfirmasi di email Anda, atau <a href=":url">klik di sini</a> untuk mengirim ulang email konfirmasi.',
        'confirm' => 'Konfirmasikan akun Anda!',
        'mismatch' => 'Kode konfirmasi Anda tidak cocok.',
        'created_pending' => 'Akun Anda berhasil dibuat dan menunggu persetujuan. Email akan dikirim ketika akun Anda disetujui.',
        'created_confirm' => 'Akun Anda berhasil dibuat. Kami telah mengirimi Anda email untuk mengonfirmasi akun Anda.',
        'not_found' => 'Kode konfirmasi itu tidak ada.',
      ),
      'deactivated' => 'Akun Anda telah dinonaktifkan.',
      'password' => 
      array (
        'reset_problem' => 'Terjadi masalah saat menyetel ulang kata sandi Anda. Silakan kirim ulang email pengaturan ulang kata sandi.',
        'change_mismatch' => 'Itu bukan kata sandi lama Anda.',
      ),
      'email_taken' => 'Alamat email itu sudah digunakan.',
      'registration_disabled' => 'Pendaftaran saat ini ditutup.',
    ),
  ),
);
