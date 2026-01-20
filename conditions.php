<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Conditions</title>

</head>

<body class="bg-gray-50">
    <?php require "./header.php"; ?>
    <section class="container mx-auto px-4 py-20">

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">All Conditions</h1>
        </div>

        <!-- Search + Alphabet -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            <!-- Search -->
            <div class="flex w-full md:max-w-md">
                <input
                    id="searchInput"
                    type="text"
                    placeholder="Search for Medical Conditions/Ailment"
                    class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none" />
                <button
                    onclick="handleSearch()"
                    class="bg-red-500 text-white px-4 rounded-r-md">
                    GO
                </button>
            </div>

            <!-- Alphabet Dropdown -->
            <select
                id="alphabetDropdown"
                class="bg-red-500 text-white px-5 py-2 rounded-full text-sm focus:outline-none">
                <option value="ALL">Sort By Alphabet</option>
            </select>

        </div>

        <!-- Cards -->
        <div id="cardsGrid" class="grid grid-cols-1 md:grid-cols-2 gap-6"></div>

        <!-- Pagination -->
        <div id="pagination" class="flex justify-center gap-2 mt-10"></div>

    </section>

    <script>
        /* =======================
   JSON DATA (API READY)
======================= */
        const CONDITIONS = [{
                id: 1,
                title: "Hypertension (high blood pressure)",
                description: "A condition where blood pressure remains consistently high, increasing the risk of heart disease and stroke.",
                url: "./hyper-tension.php"
            },
            {
                id: 2,
                title: "Diabetes",
                description: "A chronic condition in which the body cannot properly regulate blood sugar levels.",
                url: "./diabetes.php"
            },
            {
                id: 3,
                title: "Stroke",
                description: "A medical emergency caused by interrupted blood supply to the brain, leading to brain damage.",
                url: "./stroke.php"
            },
            {
                id: 4,
                title: "High Cholesterol",
                description: "An imbalance of blood fats that increases the risk of heart disease.",
                url: "./high-cholestrol.php"
            },
            {
                id: 5,
                title: "Osteoarthritis",
                description: "A degenerative joint condition causing pain, stiffness, and reduced movement.",
                url: "./osteoarthritis.php"
            },
            {
                id: 6,
                title: "Back and Neck Pain",
                description: "Pain caused by strain, injury, or disc problems affecting the spine.",
                url: "./back-and-neck-pain.php"
            },
            {
                id: 7,
                title: "Slip Disc",
                description: "Pain caused by strain, injury, or disc problems affecting the spine."
            },
            {
                id: 8,
                title: "Osteoporosis",
                description: "A condition where bones become weak and brittle, increasing fracture risk.",
                url: "./ostioporosys.php"
            },
            {
                id: 9,
                title: "Asthma",
                description: "A chronic lung condition causing airway inflammation and breathing difficulty.",
                url: "./astama.php"
            },
            {
                id: 10,
                title: "COPD / Chronic Bronchitis",
                description: "Long-term lung diseases that block airflow and cause persistent breathing problems.",
                url: "./chronic-brachotis.php"
            },
            {
                id: 11,
                title: "Pneumonia",
                description: "Infections of the lungs that cause cough, fever, and breathing difficulty.",
                url: "./pnemonia.php"
            },
            {
                id: 12,
                title: "Fractures and Injury / Trauma",
                description: "Broken bones or bodily injuries caused by accidents or physical impact.",
                url: "./fractures.php"
            },
            {
                id: 13,
                title: "Tuberculosis ",
                description: "Tuberculosis (TB) is a bacterial infection caused by Mycobacterium tuberculosis.",
                url: "./tuberculosis.php"
            },
            {
                id: 14,
                title: "Acid Reflux",
                description: "Acid reflux and gastritis are common digestive conditions.",
                url: "./acid-reflex.php"
            },
            {
                id: 16,
                title: "Peptic Ulcer Disease",
                description: "Peptic ulcer disease refers to open sores in the lining of the stomach or duodenum",
                url: "./peptic-ulcer-disesase.php"
            },
            {
                id: 17,
                title: "Gallstones",
                description: "Gallstones are hardened deposits in the gallbladder",
                url: "./gallstones.php"
            },
            {
                id: 18,
                title: "Fatty Liver Disease",
                description: "Fatty liver disease occurs when excess fat accumulates in liver cells",
                url: "./fatty-liver.php"
            },
            {
                id: 19,
                title: "Irritable Bowel Syndrome",
                description: "IBS is a functional bowel disorder causing abdominal pain",
                url: "./bowl-syndrome.php"
            },
            {
                id: 20,
                title: "Breast Cancer",
                description: "Breast cancer is the most common cancer in women",
                url: "./breast-cancer.php"
            },
            {
                id: 21,
                title: "Peptic Ulcer Disease",
                description: "Peptic ulcer disease (PUD) refers to open sores in the lining of the stomach",
                url: "./peptic-ulcer-disesase.php"
            },
            {
                id: 22,
                title: "Gallstones",
                description: "Gallstones are hardened deposits of cholesterol or bile pigments in the gallbladder",
                url: "./gallstones.php"
            }
        ];

        /* =======================
           STATE
        ======================= */
        const perPage = 10;
        let currentPage = 1;
        let currentLetter = "ALL";
        let searchTerm = "";

        /* =======================
           INIT DROPDOWN
        ======================= */
        const alphabetDropdown = document.getElementById("alphabetDropdown");
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("").forEach(l => {
            const opt = document.createElement("option");
            opt.value = l;
            opt.textContent = l;
            alphabetDropdown.appendChild(opt);
        });

        /* =======================
           FILTER LOGIC
        ======================= */
        function getFilteredData() {
            return CONDITIONS.filter(item => {
                const title = item.title.toUpperCase();
                const matchLetter = currentLetter === "ALL" || title.startsWith(currentLetter);
                const matchSearch = title.includes(searchTerm);
                return matchLetter && matchSearch;
            });
        }

        /* =======================
           RENDER CARDS
        ======================= */
        function renderCards() {
            const grid = document.getElementById("cardsGrid");
            grid.innerHTML = "";

            const filtered = getFilteredData();
            const start = (currentPage - 1) * perPage;
            const end = start + perPage;

            filtered.slice(start, end).forEach(item => {
                grid.innerHTML += `
      <div class="bg-white rounded-xl shadow p-5">
        <h3 class="font-semibold text-gray-800">${item.title}</h3>
        <p class="text-sm text-gray-600 mt-2">${item.description}</p>
        <a href="${item.url}" class="inline-flex items-center text-sm mt-4">
          Know More
          <span class="ml-2 w-4 h-4 bg-red-500 text-white rounded-full flex items-center justify-center text-xs">+</span>
        </a>
      </div>
    `;
            });

            renderPagination(filtered.length);
        }

        /* =======================
           PAGINATION
        ======================= */
        function renderPagination(totalItems) {
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = "";

            const totalPages = Math.ceil(totalItems / perPage);

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement("button");
                btn.textContent = i;
                btn.className = `w-8 h-8 rounded-full text-sm ${
      i === currentPage ? "bg-red-500 text-white" : "border"
    }`;
                btn.onclick = () => {
                    currentPage = i;
                    renderCards();
                };
                pagination.appendChild(btn);
            }
        }

        /* =======================
           EVENTS
        ======================= */
        alphabetDropdown.addEventListener("change", e => {
            currentLetter = e.target.value;
            currentPage = 1;
            renderCards();
        });

        function handleSearch() {
            searchTerm = document.getElementById("searchInput").value.toUpperCase();
            currentPage = 1;
            renderCards();
        }

        /* =======================
           INIT
        ======================= */
        renderCards();
    </script>

</body>

</html>