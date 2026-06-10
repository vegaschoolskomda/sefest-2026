# SIJA Backend - TODO

## Fase 1: Database & Auth foundation
- [ ] Update migration `users` (role, avatar)
- [ ] Tambah migration tabel SIJA sesuai spec
- [ ] Tambah dukungan verifikasi mentor-perusahaan (status + request + notifikasi admin)
- [ ] Jalankan `php artisan migrate`

## Fase 2: Model & Relasi
- [ ] Buat/Update model untuk semua tabel
- [ ] Pastikan relationship sesuai kebutuhan (hasOne/hasMany/belongsTo/through)

## Fase 3: Middleware onboarding DB-based
- [ ] Update `EnsureUserOnboarding` agar cek `user_profiles`
- [ ] Pastikan register selesai diarahkan onboarding (tidak langsung dashboard)

## Fase 4: Controllers & Routes end-to-end
- [ ] Route auth (register/login/logout/remember/reset-password)
- [ ] CRUD user onboarding/profile
- [ ] CRUD career roadmap
- [ ] Simulasi: tugas (admin), submit (user), feedback (mentor)
- [ ] Generate certificate setelah simulasi selesai
- [ ] Portfolio CRUD

## Fase 5: Admin panel + Role-based access
- [ ] Middleware/guard untuk admin
- [ ] CRUD mentors, job simulations, simulation tasks
- [ ] Kelola career recommendations
- [ ] Approve/reject verifikasi mentor + notifikasi

## Fase 6: Dashboard real data
- [ ] Ganti Blade hardcoded jadi query DB (dashboard user, roadmap, rekomendasi, simulasi aktif, sertifikat)

## Fase 7: File upload
- [ ] Jalankan `php artisan storage:link`
- [ ] Pastikan upload file tersimpan & tersaji sesuai DB path

## Fase 8: Verifikasi end-to-end
- [ ] Test skenario: user register→onboarding→dashboard
- [ ] Test skenario: mentor register→isi company→request→notif admin→approve/reject
- [ ] Test Roadmap CRUD tersimpan & tampil
- [ ] Test Simulasi upload→feedback→certificate muncul

