# Wellness Hub

A Digital Wellness & Mental Health Platform built for college students

## Pages

- `index.php` — Home, shows a daily tip based on the day of the week
- `resources.php` — Resource directory grouped by category (core build and information design feature)
- `checkin.php` — Mood check-in form using $_POST and $_SESSION (core build)
- `selfcare.php` — CSS-only affirmation carousel, checklist, and breathing animation (CSS-only interaction feature)

## Bugs / Fixes

- Bug found: The affirmation carousel worked with mouse clicks, but keyboard focus was not visible when navigating the radio controls.
- Fix: Added a `:focus-within` outline on `.carousel` so keyboard users get a visible focus indicator when tabbing through the affirmation slides.

- Bug found: Site styling was not rendering correctly like buttons had no background color, spacing was inconsistent, and the navigation bar did not display as a proper header. The page loaded with only partial styling (fonts and some layout worked, but colors and consistent spacing did not).
- Fix: Added the missing `:root` variable definitions and base layout styles (header/nav, `.site-main`, form styles, responsive breakpoints) to the top of `style.css`. Verified with a hard refresh that colors, spacing, and layout now render as intended across all four pages.