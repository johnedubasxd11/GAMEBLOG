# Dota 2 Game Blog - Complete Laravel Application

A fully functional Dota 2 Game Blog web application built with Laravel 12, featuring a dark-themed UI inspired by the official Dota 2 website.

## 🎮 Features

### ✨ Core Features
- **Home Page**: Featured banner with live section, hero highlights, and latest blog articles
- **Hero Management System**: Browse all 130+ Dota 2 heroes organized by type (Strength, Agility, Intelligence, Universal)
- **Hero Details**: View hero stats, abilities, lore, and counter heroes
- **Blog System**: Read and comment on game guides, patch updates, and meta analysis
- **Search & Filter**: Search heroes by name and filter by hero type
- **Responsive Design**: Fully mobile-responsive using Tailwind CSS
- **Dark Gaming UI**: Dota 2-inspired dark theme with glowing accents

### 👥 Admin Features
- **Hero Management**: Create, edit, and delete heroes with full stat tracking
- **Blog Management**: Write, edit, and publish blog posts with featured images
- **User Management**: Admin user authentication system
- **Dashboard**: Complete control over all application content

### 📱 User Features
- Browse and search heroes
- Read blog articles organized by category
- Comment on blog posts (authenticated users)
- View hero counters and recommendations
- Dark-themed interface with smooth animations

## 🚀 Tech Stack

- **Backend**: PHP 8.2+, Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS, HTML5
- **Database**: SQLite (Default) / MySQL (Configurable)
- **Authentication**: Laravel Built-in Auth with Custom Implementation

## 📋 Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM (for Tailwind CSS)
- SQLite or MySQL

## 🛠️ Installation & Setup

### 1. Clone & Setup
```bash
cd dota2_blog
composer install
```

### 2. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Setup
```bash
php artisan migrate:fresh --seed
```

This will:
- Create all database tables
- Seed 4 hero categories (Strength, Agility, Intelligence, Universal)
- Create 10 sample Dota 2 heroes with stats
- Create admin user (email: `admin@dota2blog.com`, password: `password`)
- Create test user (email: `test@example.com`, password: `password`)

### 4. Start Development Server
```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

## 📚 Database Schema

### Heroes Table
- ID, Name, Slug
- Category (Foreign Key)
- Description, Lore
- Roles, Image URL, Icon URL
- Stats: Health, Mana, Damage, Armor, Magic Resistance, Movement Speed
- Skills, Counters (JSON)

### Categories Table
- ID, Name, Slug, Description

### Blog Posts Table
- ID, Title, Slug, Content
- Category (Patch Updates, Hero Guides, Meta Analysis, General)
- Author (Foreign Key), Featured Image
- Views Counter, Published Flag, Timestamps

### Blog Comments Table
- ID, Blog Post ID, User ID
- Content, Approved Flag, Timestamps

### Users Table
- ID, Name, Email, Password
- Admin Flag, Timestamps

## 🔐 Default Admin Credentials

```
Email: admin@dota2blog.com
Password: password
```

**⚠️ IMPORTANT**: Change these credentials in production!

## 🗂️ Project Structure

```
dota2_blog/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── HeroController.php
│   │   │   ├── BlogController.php
│   │   │   ├── AuthController.php
│   │   │   └── Admin/
│   │   │       ├── HeroController.php
│   │   │       └── BlogController.php
│   │   └── Middleware/
│   └── Models/
│       ├── Hero.php
│       ├── Category.php
│       ├── BlogPost.php
│       ├── BlogComment.php
│       └── User.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── heroes/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── blog/
│       │   ├── index.blade.php
│       │   └── show.blade.php
│       ├── admin/
│       │   ├── heroes/
│       │   └── blog/
│       └── auth/
│           └── login.blade.php
├── routes/
│   └── web.php
└── .env
```

## 🔗 Key Routes

### Public Routes
- `/` - Home Page
- `/heroes` - All Heroes (with filtering)
- `/heroes/{slug}` - Hero Detail Page
- `/heroes-search` - Search Results
- `/blog` - Blog Articles (with category filter)
- `/blog/{slug}` - Blog Article Detail
- `/login` - Login Page

### Admin Routes (Protected)
- `/admin/heroes` - Manage Heroes (Index)
- `/admin/heroes/create` - Create New Hero
- `/admin/heroes/{id}/edit` - Edit Hero
- `/admin/blog` - Manage Blog Posts
- `/admin/blog/create` - Create New Post
- `/admin/blog/{id}/edit` - Edit Blog Post

## 🎨 Design Features

### UI/UX
- **Dark Theme**: Black/dark gray gradients with amber (#ffd700) accents
- **Responsive Grid**: 1-4 column layouts that adapt to screen size
- **Hover Effects**: Glowing borders, scale animations, color transitions
- **Mobile Menu**: Hamburger navigation for mobile devices
- **Sticky Navigation**: Always-visible top navigation bar

### Color Scheme
- Primary: `#92381e` (Dota Red)
- Secondary: `#1a1a2e` (Deep Navy)
- Accent: `#ffd700` (Gold)
- Background: Dark gradients with opacity overlays

## 📱 Responsive Breakpoints

- **Mobile**: Default (< 768px)
- **Tablet**: md (768px - 1024px)
- **Desktop**: lg+ (1024px+)

## 🔄 Future Enhancements

- [ ] OpenDota API Integration for real hero data
- [ ] Real-time winrate statistics
- [ ] Advanced hero recommendation AI
- [ ] Live match tracking
- [ ] Player stats lookup
- [ ] WebSocket real-time chat (Echo + Pusher)
- [ ] Advanced analytics dashboard
- [ ] Social sharing features
- [ ] User profiles and saved heroes

## 🛠️ Development Commands

```bash
# Create a new migration
php artisan make:migration migration_name

# Create a new model
php artisan make:model ModelName

# Create a new controller
php artisan make:controller ControllerName

# Run all migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Reset and seed database
php artisan migrate:fresh --seed

# Start Tinker REPL
php artisan tinker
```

## 📝 Example: Adding a New Hero

```php
// Via Tinker (php artisan tinker)
$hero = new App\Models\Hero();
$hero->name = 'Tiny';
$hero->slug = 'tiny';
$hero->category_id = 1; // Strength
$hero->description = 'A massive stone giant';
$hero->base_health = 820;
$hero->base_mana = 312;
$hero->base_damage = 60;
$hero->armor = 2;
$hero->magic_resistance = 0.25;
$hero->movement_speed = 285;
$hero->save();
```

## 🐛 Troubleshooting

### Database Connection Error
- Ensure `.env` file has correct `DB_CONNECTION` setting
- For SQLite, ensure `database/database.sqlite` exists and is writable

### Missing Routes
- Clear route cache: `php artisan route:clear`
- Regenerate routes: `php artisan route:cache`

### Authentication Issues
- Ensure `is_admin` field exists in users table
- Check user permissions in admin middleware

## 📄 License

This project is open source and available under the MIT License.

## 👨‍💻 Contributing

Contributions are welcome! Please feel free to submit pull requests or open issues for bugs and feature requests.

## 📞 Support

For issues and questions, please open an GitHub issue or contact the development team.

---

**Happy Blogging!** 🎮⚔️
