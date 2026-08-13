# Obsidian Security — Company Profile Website

A responsive, multi-page company profile website for **Obsidian Security**, a fictional cybersecurity company, built with Laravel's MVC architecture as part of **ITST 302 – Client-Server Technologies, Week 3 Mini Project 02**.

**Live pages:** Home · About · Services · Contact
**Stack:** Laravel 13, Blade Templating Engine, Tailwind CSS
**Repository:** `week03-company-profile`

---

## 1. Introduction

A **company profile website** is a business's official online presence — a set of pages that introduce who the company is, what it does, and how to reach it. Instead of relying entirely on social media or third-party listings, a company profile website gives a business full control over how it presents its brand, services, and credibility to potential clients.

Businesses need one because it's often the first point of contact a prospective client has with the company. A clear, professional site communicates legitimacy, explains services without a phone call, and gives visitors an obvious next step (a contact form, an email, a phone number).

The purpose of this project was to build exactly that — a company profile site for a cybersecurity company called **Obsidian Security** — while learning how Laravel structures a real web application using the **Model-View-Controller (MVC)** pattern. The focus wasn't just on visual output, but on understanding how a request travels from the browser, through a route and a controller, into a rendered Blade view, and back out as an HTML response.

## 2. Objectives

By completing this project, the following objectives were accomplished:

- Explained and applied the Model-View-Controller (MVC) architecture using Laravel.
- Created and organized multiple application routes in `routes/web.php`.
- Built a single controller (`CompanyController`) to handle requests for all four pages.
- Used the Blade Templating Engine to build a reusable master layout and shared components (navbar, footer).
- Built four fully responsive pages: Home, About, Services, and Contact.
- Applied Git version control with meaningful, incremental commits.
- Documented the entire process in this README, following Markdown conventions.
- Prepared the project for GitHub and LinkedIn portfolio publication.

## 3. MVC Architecture

**What is MVC?**
MVC (Model-View-Controller) is a software design pattern that separates an application into three interconnected parts. The **Model** manages data and business logic, the **View** is what the user actually sees (the HTML output), and the **Controller** sits in between — it receives incoming requests, decides what needs to happen, and chooses which view to return.

**Why does Laravel use MVC?**
Laravel is built around MVC because it enforces a clean separation between logic and presentation. Without it, a developer might mix PHP logic, database queries, and HTML markup in the same file — which becomes very difficult to maintain as an application grows. MVC forces routes to stay thin, controllers to hold the logic, and Blade views to focus purely on presentation.

**Advantages of MVC in software development:**
- **Separation of concerns** — each part of the app has one clear responsibility.
- **Easier maintenance** — a bug in the presentation layer doesn't require touching business logic, and vice versa.
- **Reusability** — views and layouts (like this project's navbar and footer) can be reused across many pages without duplication.
- **Team scalability** — in larger teams, developers can work on controllers, views, and models somewhat independently.

**Request flow diagram for this project:**

```
Browser
  │
  ▼
Route (routes/web.php)
  │
  ▼
CompanyController
  │
  ▼
Blade View (resources/views/pages/*.blade.php)
  │
  ▼
Response to Browser
```

*(A visual version of this diagram, made in [Draw.io / Canva / Figma], is saved in `documentation/architecture-diagram.png`.)*

## 4. Laravel Routing

**What is routing?**
Routing is how Laravel maps an incoming URL to the code that should handle it. Every request the browser makes — `/`, `/about`, `/services`, `/contact` — has to match a defined route, or Laravel returns a 404.

**GET requests:**
All four routes in this project use `Route::get()`, since every page is a simple read-only request — the browser is just asking to *view* a page, not submit or change data.

**Route definitions used in this project (`routes/web.php`):**

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home']);
Route::get('/about', [CompanyController::class, 'about']);
Route::get('/services', [CompanyController::class, 'services']);
Route::get('/contact', [CompanyController::class, 'contact']);
```

Each route doesn't render a view directly — it delegates that responsibility to a controller method, keeping `web.php` short and readable.

**Named routes** were not required for this project's scope, but Laravel supports attaching a `->name('route.name')` to any route definition, which allows referring to a URL by name (`route('contact')`) instead of hardcoding paths — useful as an application grows and URLs might change.

**Screenshot — Route Definitions:**
`screenshots/routes.png`

## 5. Controllers

**Purpose of controllers:**
A controller groups related request-handling logic into a single class instead of scattering it across route closures. `CompanyController` is responsible for every page on this site — its only job is to decide which Blade view corresponds to each route.

**Benefits of controllers:**
- Keeps `routes/web.php` clean and focused only on URL-to-action mapping.
- Groups related logic (all company pages) in one discoverable place.
- Makes it easy to later add logic — like passing dynamic data to a view — without touching the routes file.

**Controller methods:**

```php
class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

Each method returns a `view()` call, mapping to a Blade file inside `resources/views/pages/`.

**Screenshot — CompanyController.php:**
`screenshots/controller.png`

## 6. Blade Templating Engine

Blade is Laravel's templating engine. It compiles readable directives like `@extends` and `@section` into plain PHP behind the scenes, so views stay clean while still supporting loops, conditionals, and reusable layouts.

**Blade Layouts** — `resources/views/layouts/app.blade.php` is the master layout. It holds everything shared across all pages: the `<head>` tag, fonts, Tailwind configuration, the navbar, the footer, and a single `@yield('content')` placeholder where each page's unique content is injected.

**Blade Components** — `resources/views/components/navbar.blade.php` and `footer.blade.php` are anonymous Blade components. Because they live inside `resources/views/components/`, Laravel automatically registers them, so they can be used anywhere as `<x-navbar />` and `<x-footer />` with no manual setup.

**`@extends`** — used at the top of every page (e.g. `home.blade.php`) to declare which layout it inherits from:
```php
@extends('layouts.app')
```

**`@section` / `@endsection`** — wraps a page's unique content and gives it a name that matches the layout's yield:
```php
@section('content')
    <!-- page content here -->
@endsection
```

**`@yield`** — used inside the layout to mark where a section's content should be injected:
```php
@yield('content')
```

**`@include`** *(concept demonstrated via components)* — an alternative way to pull one Blade file into another, e.g. `@include('components.navbar')`. This project uses the `<x-navbar />` component syntax instead, which achieves the same reusable-partial goal through Laravel's newer anonymous component system.

**Screenshots — Blade Layout & Components:**
`screenshots/header.png` · `screenshots/footer.png`

## 7. Laravel Folder Structure

| Folder | Purpose |
|---|---|
| `app/` | Application code — controllers, models, and providers. `CompanyController` lives in `app/Http/Controllers/`. |
| `routes/` | Defines how URLs map to controllers. `web.php` holds all browser-facing routes for this project. |
| `resources/` | Uncompiled front-end assets — all Blade views (`layouts/`, `components/`, `pages/`), CSS, and JS. |
| `public/` | The web server's entry point. Holds `index.php`, and publicly accessible static assets like `images/` and `videos/` used in this project. |
| `bootstrap/` | Framework bootstrapping files that start the Laravel application and cache framework-level files. |
| `config/` | Configuration files for the app (database, mail, services, etc.), each returning a PHP array of settings. |

**Screenshots — VS Code Project & Folder Structure:**
`screenshots/initialization.png`

## 8. Screenshots

### Home Page
Code: `screenshots/homepage.png`
Browser view: `screenshots/home_page_view.png`

### About Page
Code: `screenshots/about_page.png`
Browser view: `screenshots/about_page_view.png` · `screenshots/about_page_view2.png`

### Services Page
Code: `screenshots/services_page.png`
Browser view: `screenshots/services_page_view.png` · `screenshots/services_page_view2.png`

### Contact Page
Code: `screenshots/contact_page.png`
Browser view: `screenshots/contact_page_view.png` · `screenshots/contact_page_view2.png`

### Navigation Bar
`screenshots/header.png`

### Footer
`screenshots/footer.png`

### GitHub Repository
`screenshots/github.png`

## 9. Problems Encountered

1. **`View [welcome] not found` error.** After deleting Laravel's default `welcome.blade.php`, the site immediately threw a 500 error, because `routes/web.php` still had its original closure-based route pointing to that now-deleted view.

2. **`ArgumentCountError` on `Illuminate\Foundation\Vite`.** The layout's `<head>` crashed with *"Too few arguments to function Vite::__invoke()"*. This wasn't a real Vite configuration issue — it came from an HTML comment in the layout that included the literal text `@vite`. Blade scans an entire file for `@directive` patterns, even inside HTML comments, and compiled that stray text into a real (and incomplete) `@vite()` call.

3. **Keeping wrapper `<div>` tags balanced when layering the hero video.** Adding an absolutely-positioned background `<video>` and dark overlay inside the hero section required introducing an extra wrapping `<div>` around the existing content, without disturbing the original closing tags — a small but easy-to-miss structural change.

## 10. Solutions

1. Updated the `/` route in `routes/web.php` to point to `CompanyController::class, 'home'` instead of the deleted `welcome` view, matching it with the already-built `pages/home.blade.php`.

2. Escaped the literal `@` in the HTML comment by doubling it (`@@vite`), which tells Blade to render it as plain text instead of compiling it as a directive, then cleared the compiled view cache with `php artisan view:clear`.

3. Carefully added a single `relative` wrapper `<div>` around the hero's inner content (to sit above the absolutely-positioned video and overlay), and double-checked that every opened `<div>` had a matching `</div>` before the section closed.

## 11. Reflection

Working on this project gave me a much clearer picture of what MVC actually means in practice, beyond the textbook definition. Before this, I understood MVC as "Model, View, Controller" without really feeling *why* that separation mattered. Building this company profile site made it concrete: the moment I tried adding a background video to the hero section, I only had to touch `home.blade.php` — the layout, the navbar, the footer, the controller, and the routes were completely unaffected. That's separation of concerns in action, and it's the reason the codebase stayed manageable even as I kept adding features like scroll animations and hover effects across four separate pages.

Separation of concerns matters because it limits how far a change can "leak." If routing logic, page logic, and presentation were all mixed into one file, adding something as small as a hover color on a button could risk breaking something unrelated, like how a route resolves. Keeping `web.php` focused only on URL-to-action mapping, `CompanyController` focused only on deciding which view to return, and Blade views focused only on markup meant each piece could be edited, debugged, and reasoned about in isolation.

I also came to appreciate how routes, controllers, and views work together as a chain rather than as separate, disconnected pieces. A request for `/services` doesn't "become" a page by itself — it has to be matched by a route, handed off to a controller method, and only then rendered by a Blade view that itself depends on a shared layout and two shared components. Understanding that chain made debugging much less mysterious. When the Vite error appeared, I didn't have to guess randomly — I could reason through the request lifecycle and realize the failure was happening inside the layout's `<head>`, before the page's own content was even reached.

This architecture scales well beyond a four-page static site. In a larger enterprise system, the same pattern applies: a `ProductController` might handle dozens of routes, models would connect to a real database instead of returning static Blade views, and the same reusable layout-and-component approach used here for the navbar and footer would be used for things like an admin sidebar or a dashboard header shared across dozens of internal pages. The core idea — keep logic, data, and presentation separated so each can grow independently — is exactly what makes large Laravel applications maintainable instead of turning into a single tangled file.

Overall, this project shifted MVC from something I could define to something I could actually feel the benefit of while building.

## 12. References

Laravel. (2025). *Laravel 11.x documentation*. Laravel. https://laravel.com/docs

Mozilla Developer Network. (2025). *MDN Web Docs*. Mozilla. https://developer.mozilla.org/

PHP Group. (2025). *PHP manual*. The PHP Group. https://www.php.net/docs.php

Tailwind Labs. (2025). *Tailwind CSS documentation*. Tailwind Labs. https://tailwindcss.com/docs

---

**Repository:** [github.com/Auvryy](https://github.com/Auvryy)
**LinkedIn:** [linkedin.com/in/andy-sarne](https://www.linkedin.com/in/andy-sarne/)
