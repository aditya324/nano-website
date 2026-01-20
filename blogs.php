<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blogs</title>

    <!-- Tailwind CDN -->
  
</head>

<body>

    <?php require "./header.php"; ?>

    <?php
    $blogJson = '{
  "sectionTitle": "Health Blogs & Articles",
  "blogs": [
    {
      "id": 1,
      "title": "The Role of Multispeciality Hospitals in Emergency Care",
      "slug": "./role-of-multispecility-hospital.php",
      "image": "./assets/blogs/why-nano.webp",
      "excerpt": "Medical emergencies never arrive with a warning. One moment life feels normal...",
      "ctaLink": "./role-of-multispecility-hospital.php"
    },
    {
      "id": 2,
      "title": "Why ENT Problems Are Increasing in Bengaluru — Causes & Treatments",
      "slug": "./why-ent-problemts-are-devloping.php",
      "image": "./assets/blogs/why-ent-problems-are-incresing.webp",
      "excerpt": "Why? Because the triggers around us have increased significantly over the past few years...",
      "ctaLink": "./why-ent-problemts-are-devloping.php"
    },
    {
      "id": 3,
      "title": "Mental Health Matters — Stress, Anxiety & Burnout in Bengaluru’s Fast Lane",
      "slug": "./mental-health-matters.php",
      "image": "./assets/blogs/mental-health-matters.webp",
      "excerpt": "Bengaluru is a city of dreams — technology, innovation, startups, and endless opportunities. But behind this energy lies a hidden struggle...",
      "ctaLink": "./mental-health-matters.php"
    },
    {
      "id": 4,
      "title": "Healthy Heart Bengaluru — Why Younger People Are Facing Cardiac Issues",
      "slug": "./hearty-heart-banglore.php",
      "image": "./assets/blogs/hearty-heart.webp",
      "excerpt": "Heart disease was once considered a concern for people above 50. But today, cardiologists in Bengaluru...",
      "ctaLink": "./hearty-heart-banglore.php"
    },
    {
      "id": 5,
      "title": "Women’s Health in 2025 — A Complete Guide for Working Women in Bengaluru",
      "slug": "./women-health.php",
      "image": "./assets/blogs/women-health.webp",
      "excerpt": "Every morning, Bengaluru’s working women juggle more than most people notice — office...",
      "ctaLink": "./women-health.php"
    },
    {
      "id": 6,
      "title": "The Importance of Preventive Health Checkups & Regular Screenings",
      "slug": "./preventive-health-checkup.php",
      "image": "./assets/blogs/preventive-health-checkup.webp",
      "excerpt": "Every morning, Bengaluru’s working women juggle more than most people notice — office...",
      "ctaLink": "./preventive-health-checkup.php"
    },
    {
      "id": 7,
      "title": "Bloating, Acidity & Gut Health: Complete Guide to Better Digestive System",
      "slug": "./complete-guide-to-better-digestive-system.php",
      "image": "./assets/blogs/preventive-health-checkup.webp",
      "excerpt": "Every morning, Bengaluru’s working women juggle more than most people notice — office...",
      "ctaLink": "./complete-guide-to-better-digestive-system.php"
    },
    {
      "id": 8,
      "title": "Sleep Disorders: Your Complete Guide to Better Sleep Health ",
      "slug": "./s",
      "image": "./assets/blogs/preventive-health-checkup.webp",
      "excerpt": "Every morning, Bengaluru’s working women juggle more than most people notice — office...",
      "ctaLink": "./complete-guide-to-better-digestive-system.php"
    },
    {
      "id": 9,
      "title": "24/7 Heart Emergency Care: From Chest Pain to Treatment in Minutes",
      "slug": "./twenty-four-seven-emergency.php",
      "image": "./assets/blogs/twenty-four-seven.webp",
      "excerpt": "Every morning, Bengaluru’s working women juggle more than most people notice — office...",
      "ctaLink": "./twenty-four-seven-emergency.php"
    },
    {
      "id": 10,
      "title": "24/7 Heart Emergency Care: From Chest Pain to Treatment in Minutes",
      "slug": "./twenty-four-seven-emergency.php",
      "image": "./assets/blogs/twenty-four-seven.webp",
      "excerpt": "The Silent Alarm: Why Chest Pain Should Never Be Ignored Chest pain is one of those ",
      "ctaLink": "./twenty-four-seven-emergency.php"
    },
    {
      "id": 11,
      "title": "Stroke Care Without Surgery: Inside Our Interventional Neurology Suite",
      "slug": "./stroke-care-without-surgery.php",
      "image": "./assets/blogs/twenty-four-seven.webp",
      "excerpt": "The Silent Alarm: Why Chest Pain Should Never Be Ignored Chest pain is one of those ",
      "ctaLink": "./twenty-four-seven-emergency.php"
    },
    {
      "id": 13,
      "title": "Pediatric Fever & Infection Care: Fast Relief for Your Little One",
      "slug": "./pediatric-fever.php",
      "image": "./assets/blogs/pediatric-fever.webp",
      "excerpt": "Your child wakes up burning with fever. Panic sets in — is it an infection...",
      "ctaLink": "./pediatric-fever.php"
    },
     {
      "id": 14,
      "title": "Joint Pain to Full Mobility: How Our Orthopedic Care Changes Lives",
      "slug": "./joint-pain.php",
      "image": "./assets/blogs/joint-pain.webp",
      "excerpt": "Climbing stairs feels impossible. Sitting cross-legged is painful...",
      "ctaLink": "./joint-pain.php"
    },
    {
      "id": 15,
      "title": "What level of blood sugar is dangerous?",
      "slug": "./blood-sugar-dangerous.php",
      "image": "./assets/blogs/blood-sugar-levels.webp",
      "excerpt": "In the realm of health and well-being, understanding blood sugar levels...",
      "ctaLink": "./joint-pain.php"
    },
    {
      "id": 16,
      "title": "Managing Urinary Infections in Summer: Nano Hospital’s Advanced UTI Treatments",
      "slug": "./managing-uti-infections.php",
      "image": "./assets/blogs/uti-in-summer.webp",
      "excerpt": "Summer brings warmth, sunshine, and unfortunately, an increased risk of...",
      "ctaLink": "./managing-uti-infections.php"
    },
    {
      "id": 17,
      "title": "What are diabetic foot problems?",
      "slug": "./diabetic-foot-problems.php",
      "image": "./assets/blogs/diabetic-foot-infections.webp",
      "excerpt": "Diabetic foot problems refer to a range of medical conditions that...",
      "ctaLink": "./diabetic-foot-problems.php"
    },
    {
      "id": 18,
      "title": "What are some symptoms to watch out for in diabetic foot problems?",
      "slug": "./symptoms-t-watchout-for-diabtic-foot-problems.php",
      "image": "./assets/blogs/symptoms-to-watchout-diabetic-foot.webp",
      "excerpt": "As a person with diabetes, its important to pay attention to your feet and watch out for any signs",
      "ctaLink": "./symptoms-t-watchout-for-diabtic-foot-problems.php"
    },
    {
      "id": 19,
      "title": "What are diabetic foot infections?",
      "slug": "./diabetic-foot-infections.php",
      "image": "./assets/blogs/diabetic-foot-infections.webp",
      "excerpt": "As a person with diabetes, its important to pay attention to your feet and watch out for any signs",
      "ctaLink": "./diabetic-foot-infections.php"
    }

  ]
}';

    $data = json_decode($blogJson, true);
    ?>

    <h2 class="text-2xl md:text-3xl font-semibold text-center text-[#737373] mb-12 pt-28">
        <?= $data['sectionTitle']; ?>
    </h2>

    <div class="container mx-auto grid md:grid-cols-3 grid-cols-1 justify-items-center gap-10 mt-5 lg:px-0 px-5">

        <?php foreach ($data['blogs'] as $blog): ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">

                <div class="w-full relative">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover"
                        src="<?= $blog['image']; ?>"
                        alt="<?= htmlspecialchars($blog['title']); ?>">

                    <p class="absolute bottom-10 text-center w-full bg-white text-xs p-2 text-[#FA424A] font-semibold">
                        <?= $blog['title']; ?>
                    </p>
                </div>

                <div class="px-6 py-4">
                    <div class="text-xl font-medium mb-2 text-[#525252]">
                        <?= $blog['excerpt']; ?>
                    </div>

                    <div class="flex justify-center pt-10">
                        <a href="<?= $blog['ctaLink']; ?>" class="text-[#6C3130] text-xl font-medium">
                            Read post
                        </a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>


    <!-- Footer -->

</body>

</html>