# Quick Start Guide - Dota 2 Game Blog

## 🚀 Start the Application

### Step 1: Navigate to Project Directory
```bash
cd "c:\Users\johne\OneDrive\Desktop\NEW PHP\dota2_blog"
```

### Step 2: Start Laravel Server
```bash
php artisan serve
```

You'll see output like:
```
INFO  Server running on [http://127.0.0.1:8000]
```

### Step 3: Open in Browser
Visit: **http://localhost:8000**

## 📖 Application Features

### Public Pages
- **Home** (`/`) - Hero banner, statistics, latest articles
- **Heroes** (`/heroes`) - Browse all heroes by category
- **Hero Details** (`/heroes/{slug}`) - Full hero information
- **Blog** (`/blog`) - Read articles
- **Blog Article** (`/blog/{slug}`) - Read full article with comments
- **Login** (`/login`) - User authentication

### Admin Features (After Login)
- **Admin Heroes** (`/admin/heroes`) - Manage heroes (CRUD)
- **Admin Blog** (`/admin/blog`) - Manage blog posts (CRUD)

## 🔑 Demo Credentials

**Email**: admin@dota2blog.com  
**Password**: password

Login at: http://localhost:8000/login

## 🗄️ Database Management

### Reset Database (Fresh Start)
```bash
php artisan migrate:fresh --seed
```

### View Database
SQLite database file location:
```
database/database.sqlite
```

Use any SQLite browser tool to inspect the database.

## 📚 Seeded Test Data

After running `migrate:fresh --seed`, you'll have:

### Users
- Admin User: admin@dota2blog.com (password: password)
- Test User: test@example.com (password: password)

### Heroes (10 total)
- **Strength**: Axe, Pudge, Wraith King
- **Agility**: Anti-Mage, Drow Ranger, Phantom Assassin
- **Intelligence**: Crystal Maiden, Invoker, Lina
- **Universal**: Doom, Earthshaker

### Categories
- Strength
- Agility
- Intelligence
- Universal

### Blog Posts
None (create your own via admin panel)

## ⚙️ Common Tasks

### Create a New Blog Post
1. Login as admin
2. Go to Admin → Blog
3. Click "New Post"
4. Fill in Title, Category, Content
5. Check "Publish" to make it visible
6. Click "Create Post"

### Add a New Hero
1. Login as admin
2. Go to Admin → Heroes
3. Click "Add Hero"
4. Fill in hero details (name, stats, description, etc.)
5. Click "Create Hero"

### Create a User Account
Currently, users must be created via database or seeding. To add a user:

```bash
php artisan tinker
>>> $user = new App\Models\User();
>>> $user->name = 'New User';
>>> $user->email = 'user@example.com';
>>> $user->password = Hash::make('password');
>>> $user->is_admin = false;
>>> $user->save();
```

Then login with the new credentials.

## 🔍 Troubleshooting

### "Internal Server Error" on Hero Page
- Check that database is properly seeded
- Run: `php artisan migrate:fresh --seed`

### "The provided credentials do not match"
- Make sure to reset the database first
- Run: `php artisan migrate:fresh --seed`
- Login with: admin@dota2blog.com / password

### Server won't start
- Check if port 8000 is already in use
- Use a different port: `php artisan serve --port=8001`
- Visit: http://localhost:8001

### CSS/Styling not loading
- This is normal! Tailwind CSS uses CDN in development
- Styling will fully work when page loads

## 🛠️ Development Commands

### Run Tests
```bash
php artisan test
```

### Generate Migration
```bash
php artisan make:migration table_name
```

### Generate Model
```bash
php artisan make:model ModelName
```

### Generate Controller
```bash
php artisan make:controller ControllerName
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
```

### Access Database Shell
```bash
php artisan tinker
```

## 📁 Important Files

- **`.env`** - Environment configuration (database connection)
- **`app/Models/`** - Database models
- **`app/Http/Controllers/`** - Application logic
- **`resources/views/`** - HTML templates
- **`routes/web.php`** - URL routing
- **`database/migrations/`** - Database schema
- **`database/seeders/`** - Sample data

## 🌐 Project URLs

| Page | URL |
|------|-----|
| Home | http://localhost:8000 |
| Heroes | http://localhost:8000/heroes |
| Blog | http://localhost:8000/blog |
| Login | http://localhost:8000/login |
| Admin Heroes | http://localhost:8000/admin/heroes |
| Admin Blog | http://localhost:8000/admin/blog |

## 📞 Support

For detailed documentation, see:
- `SETUP.md` - Installation and configuration
- `COMPLETION_SUMMARY.md` - Full project overview
- Code comments in controllers and models

---

**Happy blogging! 🎮**
