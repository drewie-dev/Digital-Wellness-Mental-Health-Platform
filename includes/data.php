<?php
// data.php
// Central place for all our PHP arrays.
// Kept separate from page markup so any page can include() this
// file and get access to $resources / $tips without duplicating data.

// Resource directory
// Each resource has: type, title, description, link.
// "type" is what resources.php groups by to build category sections.
$resources = [
    [
        "type" => "Crisis Line",
        "title" => "988 Suicide & Crisis Lifeline",
        "description" => "Free, confidential support available 24/7 for anyone in emotional distress.",
        "link" => "https://988lifeline.org"
    ],
    [
        "type" => "Crisis Line",
        "title" => "Crisis Text Line",
        "description" => "Text HOME to 741741 to connect with a trained crisis counselor anytime.",
        "link" => "https://www.crisistextline.org"
    ],
    [
        "type" => "Campus 24/7 Crisis Consultation",
        "title" => "Campus Free Call in Crisis Consultation",
        "description" => "Free, confidential counseling sessions available to all enrolled students.",
        "link" => "https://counseling.gsu.edu/crisis-consultation/"
    ],
    [
        "type" => "Campus Counseling",
        "title" => "Campus Counseling Center",
        "description" => "Free, confidential counseling sessions available to all enrolled students.",
        "link" => "https://counseling.gsu.edu/counseling-sessions/"
    ],
    [
        "type" => "Campus Counseling",
        "title" => "Group Support Groups",
        "description" => "Weekly student-led groups covering stress, grief, and academic pressure.",
        "link" => "https://counseling.gsu.edu/group-counseling/"
    ],
    [
        "type" => "App",
        "title" => "Calm",
        "description" => "Guided meditations, sleep stories, and breathing exercises.",
        "link" => "https://www.calm.com"
    ],
    [
        "type" => "App",
        "title" => "Headspace",
        "description" => "Bite-sized mindfulness sessions built for busy schedules.",
        "link" => "https://www.headspace.com"
    ],
    [
        "type" => "Article",
        "title" => "Managing Exam Stress",
        "description" => "Practical strategies for staying grounded during finals week.",
        "link" => "https://activeminds.org/blog/how-to-stay-calm-and-focused-during-finals-week/"
    ],
    [
        "type" => "Article",
        "title" => "Building a Sleep Routine in College",
        "description" => "Why sleep matters for mental health",
        "link" => "https://med.stanford.edu/news/insights/2025/08/sleep-mental-health-connection-what-science-says.html"
    ],
];

// Daily tips
// Index 0 = Monday - Index 6 = Sunday.
// date('N') returns 1 (Mon) through 7 (Sun), so index.php subtracts 1
// to line the current weekday up with this array.
$tips = [
    "Start today with one small, achievable task. Momentum matters more than perfection.",
    "Take a 5-minute walk between classes. Movement resets your focus.",
    "Midweek check-in: how many hours of sleep did you get last night?",
    "It's okay to say no to plans if you need a quiet night to recharge.",
    "You made it to Friday. Take a moment to acknowledge what you got through this week.",
    "Weekends are for rest too, not just catching up. Protect some downtime.",
    "Plan one small thing for tomorrow so Monday feels less overwhelming.",
];
