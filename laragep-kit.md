# Laravel 13 + Filament 5 Starter Kit

## Product Requirements Document (PRD)

---

# 1. Overview

Starter kit internal berbasis **Laravel 13 + Filament 5** untuk mempercepat development project admin panel.

Tujuan utama starter kit ini adalah menyediakan fondasi dashboard admin yang sudah siap digunakan sehingga developer tidak perlu mengulang setup dasar setiap memulai project baru.

Starter kit difokuskan pada:

- RBAC siap pakai
- Dashboard minimal
- Single admin panel
- AI-assisted development workflow
- Struktur standar Filament
- Developer experience yang cepat dan konsisten

---

# 2. Goals

## Primary Goals

- Mempercepat setup project Filament baru
- Mengurangi boilerplate berulang
- Menyediakan sistem role & permission bawaan
- Menyediakan struktur project yang konsisten
- Mendukung workflow development berbantuan AI

## Non-Goals (MVP)

Belum termasuk:

- Multi-tenancy
- Multi-panel
- Docker/Sail
- Full API support
- Social login
- 2FA
- Media management
- Dynamic settings
- Advanced customization

---

# 3. Target User

## Primary User

### Superadmin

User internal yang memiliki akses penuh terhadap:

- User management
- Role & permission management
- Resource management
- System configuration
- Dashboard administration

## Secondary User

### Admin

User internal yang memiliki akses terbatas berdasarkan permission yang diberikan oleh superadmin.

Admin dapat:

- Mengakses dashboard
- Mengakses resource tertentu
- Menggunakan fitur sesuai permission

---

# 4. Problem Statement

Saat membangun project baru menggunakan Filament, developer sering mengulang setup yang sama:

- Install package dasar
- Setup panel admin
- Setup authentication
- Setup RBAC
- Setup role & permission
- Membuat dashboard awal
- Menyiapkan struktur project

Proses ini memakan waktu dan menyebabkan inkonsistensi antar project.

Starter kit ini dibuat untuk mengatasi masalah tersebut.

---

# 5. Product Scope

## MVP Scope

### Core Stack

- Laravel 13
- Filament 5
- PostgreSQL
- Tailwind CSS

### Admin Panel

- Single panel `/admin`
- Default login page Filament
- Dashboard minimal

### Authentication & Authorization

- Filament Shield
- Spatie Laravel Permission
- Role:
  - `superadmin`
  - `admin`

### AI-Assisted Development

- Laravel Boost
- Laravel Skills
- Filament Skills
- Tailwind CSS Skills

### Developer Experience

- Composer-based setup
- Minimal configuration
- Standar struktur Filament
- Seeder default
- Dokumentasi internal

---

# 6. Functional Requirements

## FR-001: Admin Panel

Sistem harus menyediakan single admin panel pada path:

```txt
/admin
```

---

## FR-002: Authentication

Sistem menggunakan login page bawaan Filament.

Fitur:

- Login
- Logout
- Session authentication

---

## FR-003: RBAC

Sistem harus menggunakan:

- Filament Shield
- Spatie Laravel Permission

Fitur RBAC:

- Generate permissions otomatis
- Assign permission ke role
- Protect resource/page/widget
- Permission-based access control

---

## FR-004: Roles

### Superadmin

Akses penuh terhadap:

- Semua resource
- Semua page
- User management
- Role management
- Permission management
- System settings

### Admin

Akses terbatas berdasarkan permission yang diberikan superadmin.

Default access:

- Dashboard
- Resource tertentu yang diizinkan

---

## FR-005: Dashboard

Dashboard minimal harus memiliki:

- Welcome section
- User info
- Current role
- Placeholder statistics

---

## FR-006: Seeder

Starter kit harus menyediakan seeder default:

### Roles

- superadmin
- admin

### Default User

```txt
email: laragep@mail.com
password: password
```

---

## FR-007: PostgreSQL Support

Database default menggunakan PostgreSQL.

Environment dan konfigurasi harus sudah disiapkan.

---

## FR-008: Composer Installation

Project dapat dijalankan menggunakan Composer tanpa Docker.

### Setup Flow

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan shield:generate
php artisan serve
```

---

## FR-009: AI-Assisted Development

Starter kit harus menyediakan dokumentasi atau konfigurasi untuk:

- Laravel Boost
- Laravel Skills
- Filament Skills
- Tailwind CSS Skills
npx skills add https://github.com/ulpi-io/skills --skill laravel
npx skills add https://github.com/ulpi-io/skills --skill laravel-filament


Tujuan:

- Membantu AI memahami struktur project
- Meningkatkan kualitas code generation
- Mempercepat development workflow

---

# 7. Technical Decisions

## Architecture

- Single admin panel
- Single application
- Single authentication guard
- Standard Filament structure

## Database

- PostgreSQL

## Deployment

- Composer-based installation
- No Docker for MVP

## Repository

- Internal repository terlebih dahulu
- GitHub repository dibuat setelah starter kit stabil

---

# 8. Recommended Folder Structure

```txt
app/
├── Filament/
│   ├── Resources/
│   ├── Pages/
│   ├── Widgets/
│   └── Auth/
├── Models/
├── Policies/
└── Providers/
```

---

# 9. Recommended Packages

## Core Packages

```bash
composer require filament/filament
composer require bezhansalleh/filament-shield
composer require spatie/laravel-permission
```

---

# 10. User Flow

## Superadmin Flow

1. Login ke `/admin`
2. Mengakses dashboard
3. Mengelola users
4. Mengelola role & permission
5. Mengatur akses admin
6. Mengelola seluruh resource

## Admin Flow

1. Login ke `/admin`
2. Mengakses dashboard
3. Mengakses resource tertentu sesuai permission

---

# 11. Non-Functional Requirements

## Performance

- Dashboard ringan
- Fast initial load
- Minimal package overhead

## Maintainability

- Struktur standar Filament
- Mudah dikembangkan
- Mudah digunakan ulang

## Security

- Semua admin route protected
- Permission-based access
- Secure authentication

## Developer Experience

- Setup cepat
- Dokumentasi jelas
- Boilerplate minimal

---

# 12. Success Metrics

Starter kit dianggap berhasil jika:

- Setup project < 15 menit
- Admin panel langsung berjalan
- RBAC langsung aktif
- Seeder berjalan tanpa error
- Developer tidak perlu setup RBAC dari nol
- Bisa digunakan ulang di multiple project internal

---

# 13. Future Enhancements

## Planned Features

- Customized Filament CRUD stubs
- Auto reload on save
- Filament Breezy
- Social login
- 2FA
- Media library
- API service
- Scramble API docs
- Export/import examples
- Dynamic settings
- Resend integration
- Multi-tenancy

---

# 14. Development Priority

## Phase 1 — MVP

1. Laravel 13
2. Filament 5
3. PostgreSQL
4. Admin panel `/admin`
5. Shield RBAC
6. Seeder roles/users
7. Dashboard minimal
8. Internal documentation
9. AI-assisted setup

## Phase 2

1. Breezy
2. Socialite
3. Media library
4. API support
5. Settings management
6. Export/import
7. Custom stubs

---

# 15. Final Notes

Starter kit ini ditujukan untuk penggunaan internal dengan fokus utama:

- Kecepatan development
- Konsistensi project
- Struktur Filament standar
- Setup minimal
- Developer productivity

Pendekatan MVP dibuat tetap ringan agar mudah dirawat dan mudah dikembangkan secara bertahap.

---
> **💡 Pro Tip:** Are you ready to create a slide deck from this PRD? Don't start from scratch. Use **Gamma** to convert this PRD into a presentation automatically.
Use the [Gamma AI Presentation Generator](https://try.gamma.app/PRD)
_(Sponsored)_
✅ Professional slides, auto-formatted  
✅ Dozens of polished, customizable templates  
✅ Export and share easily (PDF/PowerPoint)  
✅ No credit card required  

👉 **[Create with Gamma AI – For Free](https://try.gamma.app/PRD)**
