# Wellness Hub

A Digital Wellness & Mental Health Platform built for college students

## Pages

- `index.php` — Home, shows a daily tip based on the day of the week
- `resources.php` — Resource directory grouped by category (core build and information design feature)
- `checkin.php` — Mood check in form using $_POST and $_SESSION (core build)
- `selfcare.php` — CSS only affirmation carousel, checklist, and breathing animation (CSS only interaction feature)

## Core Build

The core website includes four PHP pages with shared navigation, header, and footer components. PHP arrays dynamically generate resource content, while the mood check-in form uses server-side validation and session storage.

## Secondary Feature A: Resource Directory

Resources are stored in a multidimensional PHP array, grouped by category, and rendered dynamically using foreach loops

## Secondary Feature B: CSS-Only Self-Care Toolkit

The self-care page includes a CSS only affirmation carousel, interactive checklist, and animated breathing exercise. No front end JavaScript is used

## Bugs / Fixes

- Bug found: The affirmation carousel worked with mouse clicks, but keyboard focus was not visible when navigating the radio controls 
- Fix: Added a `:focus within` outline on `.carousel` so keyboard users get a visible focus indicator when tabbing through the affirmation slides 

- Bug found: Site styling was not rendering correctly like buttons had no background color, spacing was inconsistent, and the navigation bar did not display as a proper header  The page loaded with only partial styling (fonts and some layout worked, but colors and consistent spacing did not) 
- Fix: Added the missing `:root` variable definitions and base layout styles (header/nav, `.site main`, form styles, responsive breakpoints) to the top of `style.css`. Verified with a hard refresh that colors, spacing, and layout now render as intended across all four pages 

## Structure

```
wellness hub/
├── includes/
│   ├── header.php   (shared header + nav)
│   ├── footer.php   (shared footer)
│   └── data.php     (PHP arrays: $resources, $tips)
├── css/
│   └── style.css
├── index.php
├── resources.php
├── checkin.php
├── selfcare.php
└── README.md
```

## PHP Requirements Covered

- `include()` for shared header, footer, and nav on every page
- `$resources[]` array rendered with `foreach`, grouped by category
- `$_POST` form with server side validation and `htmlspecialchars()` sanitization
- `$_SESSION` stores the mood check in and displays it back to the user
- `$tips[]` array selected by `date('N')` weekday index

## Responsive Strategy

- Breakpoint 1: 820px — navigation stacks, grids go from 3 columns to 2 columns
- Breakpoint 2: 560px — layout goes to 1 column, tap targets increase, carousel dots expand
- CSS Grid used for card layouts, Flexbox used for nav
- CSS custom properties and relative units for fluid spacing

## Setup Instructions

1. Place the project folder inside a PHP-supported server directory.
2. Start the local PHP or Apache server.
3. Open index.php through the server URL.
4. Do not open the PHP files directly from the file system.

## AI Usage Disclosure

AI tools were used to assist with debugging, reviewing CSS consistency, improving responsive styling, and organizing documentation. All project code was reviewed and tested