<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Procedures</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
 <?php require "./header.php"; ?>
<section class="max-w-7xl mx-auto px-4 py-20">

  <!-- Header -->
  <div class="text-center mb-8">
    <h1 class="text-2xl font-semibold text-gray-800">All Procedures</h1>
  </div>

  <!-- Search + Alphabet -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

    <!-- Search -->
    <div class="flex w-full md:max-w-md">
      <input
        id="searchInput"
        type="text"
        placeholder="Search for Medical Procedures / Treatment"
        class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none"
      />
      <button
        onclick="handleSearch()"
        class="bg-red-500 text-white px-4 rounded-r-md">
        GO
      </button>
    </div>

    <!-- Alphabet Dropdown -->
    <select
      id="alphabetDropdown"
      class="bg-red-500 text-white px-5 py-2 rounded-full text-sm focus:outline-none"
    >
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
   PROCEDURES JSON
======================= */
const PROCEDURES = [
  {
    id: 1,
    title: "Cataract Surgery",
    description: "A procedure to remove the cloudy lens of the eye and restore clear vision."
  },
  {
    id: 2,
    title: "Coronary Artery Bypass Graft (CABG)",
    description: "A heart surgery that improves blood flow by bypassing blocked coronary arteries."
  },
  {
    id: 3,
    title: "Cesarean Section (C-section)",
    description: "A surgical procedure used to deliver a baby through an incision in the abdomen and uterus."
  },
  {
    id: 4,
    title: "Appendectomy",
    description: "Surgical removal of the appendix, usually performed to treat appendicitis."
  },
  {
    id: 5,
    title: "Cholecystectomy",
    description: "Surgical removal of the gallbladder, commonly done to treat gallstones."
  },
  {
    id: 6,
    title: "Knee Replacement",
    description: "A procedure that replaces a damaged knee joint to relieve pain and improve movement."
  },
  {
    id: 7,
    title: "Hip Replacement",
    description: "Surgery to replace a worn or damaged hip joint, restoring mobility and reducing pain."
  },
  {
    id: 8,
    title: "Hernia Repair",
    description: "A surgical procedure to correct a hernia by repairing the weakened abdominal wall."
  },
  {
    id: 9,
    title: "Breast Surgery (Lumpectomy / Mastectomy)",
    description: "Surgical treatment for breast cancer involving partial or complete removal of breast tissue."
  },
  {
    id: 10,
    title: "Tonsillectomy",
    description: "A surgical procedure to remove the tonsils, often done for recurrent infections."
  },
  {
    id: 11,
    title: "Hysterectomy",
    description: "A surgical procedure to remove the uterus, often performed to treat fibroids or cancer."
  },
  {
    id: 12,
    title: "Prostate Surgery",
    description: "A procedure to treat prostate enlargement or prostate cancer by removing part or all of the prostate gland."
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
   INIT ALPHABET DROPDOWN
======================= */
const alphabetDropdown = document.getElementById("alphabetDropdown");
"ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("").forEach(letter => {
  const opt = document.createElement("option");
  opt.value = letter;
  opt.textContent = letter;
  alphabetDropdown.appendChild(opt);
});

/* =======================
   FILTER DATA
======================= */
function getFilteredData() {
  return PROCEDURES.filter(item => {
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
        <a href="#" class="inline-flex items-center text-sm mt-4">
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
