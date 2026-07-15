<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Project Records</h2>
                    <p class="text-gray-600 text-sm sm:text-base">Selected completed projects from our extensive portfolio</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <select id="sort-select" class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#0077B6] focus:border-transparent text-sm sm:text-base">
                        <option value="year-desc">Sort by Year (Newest First)</option>
                        <option value="year-asc">Sort by Year (Oldest First)</option>
                        <option value="client-asc">Sort by Client (A-Z)</option>
                        <option value="client-desc">Sort by Client (Z-A)</option>
                        <option value="location-asc">Sort by Location (A-Z)</option>
                        <option value="location-desc">Sort by Location (Z-A)</option>
                        <option value="work-asc">Sort by Scope (A-Z)</option>
                        <option value="work-desc">Sort by Scope (Z-A)</option>
                        <option value="contractor-asc">Sort by Contractor (A-Z)</option>
                        <option value="contractor-desc">Sort by Contractor (Z-A)</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="year">
                            Year <span class="sort-icon">↓</span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="client">
                            Client
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="location">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="work">
                            Scope of Work
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sort" data-sort="contractor">
                            Contractor
                        </th>
                    </tr>
                    </thead>
                    <tbody id="table-body" class="bg-white divide-y divide-gray-200">
                    <!-- Data will be inserted here by JavaScript -->
                    </tbody>
                </table>

                <div class="flex items-center justify-between px-6 py-3 bg-white border-t border-gray-200">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <button id="prev-btn-mobile" class="relative inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </button>
                        <button id="next-btn-mobile" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </button>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span id="page-start" class="font-medium">1</span> to <span id="page-end" class="font-medium">3</span> of <span id="total-items" class="font-medium">15</span> projects
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <button id="prev-btn" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="page-numbers" class="flex">
                                    <!-- Page numbers will be inserted here -->
                                </div>
                                <button id="next-btn" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Project data
        const projects = [
            {
                year: 2025,
                client: "OANDO Energy Resources",
                location: "Brass Oil Field",
                work: "Provision of Diving & Offshore Maintenance Services and Supply of Diving Support Vessel (DSV Liberty) for NAOC operation areas/Brass Oil Field",
                contractor: "-"
            },
            {
                year: 2024,
                client: "OANDO Energy Resources",
                location: "Ogbaru-Toru field",
                work: "Diving Support for Leak Intervention on Tebidaba/Brass 18” Pipeline Repairs",
                contractor: "-"
            },
            {
                year: 2024,
                client: "TOTAL ENERGIES LTD",
                location: "Total Fields",
                work: "Underwater Inspection of FSO Unity and Calm BUOY Anchor Chains by ROV",
                contractor: "OCEAN EASE"
            },
            {
                year: 2023,
                client: "GLOBAL SPECTRUM",
                location: "Anthan field",
                work: "Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities",
                contractor: "-"
            },
            {
                year: 2022,
                client: "GLOBAL SPECTRUM",
                location: "Agbara field",
                work: "Hire and Operation of Security Patrol Boat (Conqueror Due) for Security Activities",
                contractor: "-"
            },
            {
                year: 2021,
                client: "AUGUSTA MARITIME SERVICES",
                location: "Mellitah Terminal, Libya",
                work: "Provision of Diving Maintenance/Services at Western Libya Mellitah Terminal (ENIGAS)",
                contractor: "-"
            },
            {
                year: 2020,
                client: "NAOC",
                location: "Brass Terminal",
                work: "Patrol Services (Conqueror Tre) at Brass Terminal",
                contractor: "-"
            },
            {
                year: 2020,
                client: "DAEWOO ENGINEERING & CONSTRUCTION NIG. LTD",
                location: "NLNG Bonny Field",
                work: "Demolition of MOF2 General Cargo Berth Project",
                contractor: "-"
            },
            {
                year: 2020,
                client: "GLOBAL SPECTRUM ENERGY SERVICES LTD / ADDAX",
                location: "Okwori Field",
                work: "Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities",
                contractor: "-"
            },
            {
                year: 2019,
                client: "SPDC",
                location: "Forcados & Bonny Field",
                work: "Call Off Emergency works at Forcados and Bonny Fields",
                contractor: "HNL"
            },
            {
                year: 2019,
                client: "NAE",
                location: "Okwori Field",
                work: "Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities",
                contractor: "-"
            },
            {
                year: 2019,
                client: "SPDC",
                location: "Ogbotobo Flow Station",
                work: "Ogbotobo Concrete Barge Scour Rectification Project",
                contractor: "-"
            },
            {
                year: 2019,
                client: "PISCES OFFSHORE",
                location: "Asasa Field",
                work: "Provision of Inspection Class ROV Spread and Personnel for Asasa VA and Asasa VB Platform Jacket Face Survey at MPN Field",
                contractor: "-"
            },
            {
                year: 2019,
                client: "NAOC",
                location: "Brass Oil Field",
                work: "Complete Inspections and Reporting of Single Point Mooring System 1 & System 2 and BOP",
                contractor: "-"
            },
            {
                year: 2019,
                client: "NAOC",
                location: "Brass Oil field",
                work: "Subsea Marine Hoses Change out on SPM1 at Brass Oil field",
                contractor: "-"
            },
            {
                year: 2019,
                client: "Niger Dive Ltd",
                location: "Agbara field",
                work: "Underwater Inspection of Sealines and Structural Jacket at Agbara field",
                contractor: "-"
            },
            {
                year: 2019,
                client: "SPDC",
                location: "SPDC EA Field",
                work: "Accommodation and Security Coverage at SPDC EA field",
                contractor: "-"
            }
        ];

        // Pagination variables
        const itemsPerPage = 5;
        let currentPage = 1;
        let sortedData = [...projects];
        let sortDirection = 'desc';
        let currentSort = 'year';

        // DOM elements
        const tableBody = document.getElementById('table-body');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const prevBtnMobile = document.getElementById('prev-btn-mobile');
        const nextBtnMobile = document.getElementById('next-btn-mobile');
        const pageStart = document.getElementById('page-start');
        const pageEnd = document.getElementById('page-end');
        const totalItems = document.getElementById('total-items');
        const pageNumbers = document.getElementById('page-numbers');
        const sortButtons = document.querySelectorAll('.sort');
        const sortSelect = document.getElementById('sort-select');

        // Initialize the table
        function initTable() {
            renderTable();
            updatePagination();
            renderPageNumbers();
        }

        // Render table rows
        function renderTable() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedData = sortedData.slice(startIndex, endIndex);

            tableBody.innerHTML = '';

            if (paginatedData.length === 0) {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                    No projects found
                </td>
            `;
                tableBody.appendChild(row);
                return;
            }

            paginatedData.forEach(project => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-gray-50';
                row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${project.year}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.client}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.location}</td>
                <td class="px-6 py-4 text-sm text-gray-500">${project.work}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${project.contractor}</td>
            `;
                tableBody.appendChild(row);
            });
        }

        // Update pagination info
        function updatePagination() {
            const totalPages = Math.ceil(sortedData.length / itemsPerPage);
            const startItem = (currentPage - 1) * itemsPerPage + 1;
            const endItem = Math.min(currentPage * itemsPerPage, sortedData.length);

            pageStart.textContent = startItem;
            pageEnd.textContent = endItem;
            totalItems.textContent = sortedData.length;

            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === totalPages;
            prevBtnMobile.disabled = currentPage === 1;
            nextBtnMobile.disabled = currentPage === totalPages;
        }

        // Render page numbers
        function renderPageNumbers() {
            const totalPages = Math.ceil(sortedData.length / itemsPerPage);
            pageNumbers.innerHTML = '';

            // Always show first page
            addPageNumber(1);

            // Show ellipsis if needed
            if (currentPage > 3 && totalPages > 3) {
                const ellipsis = document.createElement('span');
                ellipsis.className = 'relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700';
                ellipsis.textContent = '...';
                pageNumbers.appendChild(ellipsis);
            }

            // Show current page and adjacent pages
            const startPage = Math.max(2, currentPage - 1);
            const endPage = Math.min(totalPages - 1, currentPage + 1);

            for (let i = startPage; i <= endPage; i++) {
                if (i > 1 && i < totalPages) {
                    addPageNumber(i);
                }
            }

            // Show ellipsis if needed
            if (currentPage < totalPages - 2 && totalPages > 3) {
                const ellipsis = document.createElement('span');
                ellipsis.className = 'relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700';
                ellipsis.textContent = '...';
                pageNumbers.appendChild(ellipsis);
            }

            // Always show last page if there's more than one page
            if (totalPages > 1) {
                addPageNumber(totalPages);
            }
        }

        function addPageNumber(page) {
            const pageElement = document.createElement('button');
            pageElement.className = `relative inline-flex items-center px-4 py-2 border text-sm font-medium ${currentPage === page ? 'bg-blue-50 border-blue-500 text-blue-600 z-10' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50'}`;
            pageElement.textContent = page;
            pageElement.addEventListener('click', () => {
                currentPage = page;
                renderTable();
                updatePagination();
                renderPageNumbers();
            });
            pageNumbers.appendChild(pageElement);
        }

        // Sort data
        function sortData(sortBy, direction = null) {
            if (direction) {
                sortDirection = direction;
            } else if (currentSort === sortBy) {
                sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                currentSort = sortBy;
                sortDirection = 'desc';
            }

            // Update sort icons in headers
            sortButtons.forEach(button => {
                const icon = button.querySelector('.sort-icon');
                if (button.dataset.sort === sortBy) {
                    icon.textContent = sortDirection === 'asc' ? '↑' : '↓';
                } else {
                    icon.textContent = '';
                }
            });

            // Update select dropdown to match current sort
            sortSelect.value = `${sortBy}-${sortDirection}`;

            sortedData = [...projects].sort((a, b) => {
                // Handle numeric sorting for year
                if (sortBy === 'year') {
                    return sortDirection === 'asc' ? a.year - b.year : b.year - a.year;
                }

                // Handle string sorting for other fields
                const valueA = String(a[sortBy]).toLowerCase();
                const valueB = String(b[sortBy]).toLowerCase();

                if (valueA < valueB) return sortDirection === 'asc' ? -1 : 1;
                if (valueA > valueB) return sortDirection === 'asc' ? 1 : -1;
                return 0;
            });

            currentPage = 1;
            renderTable();
            updatePagination();
            renderPageNumbers();
        }

        // Event listeners for pagination
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(sortedData.length / itemsPerPage)) {
                currentPage++;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        prevBtnMobile.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        nextBtnMobile.addEventListener('click', () => {
            if (currentPage < Math.ceil(sortedData.length / itemsPerPage)) {
                currentPage++;
                renderTable();
                updatePagination();
                renderPageNumbers();
            }
        });

        // Event listeners for header sorting
        sortButtons.forEach(button => {
            button.addEventListener('click', () => {
                sortData(button.dataset.sort);
            });
        });

        // Event listener for select dropdown sorting
        sortSelect.addEventListener('change', function() {
            const [sortBy, direction] = this.value.split('-');
            sortData(sortBy, direction);
        });

        // Initialize
        initTable();
    });
</script>

<!-- Completed Projects Archive -->
{{--        <section class="py-16 bg-white">--}}
{{--            <div class="container mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--                <div class="max-w-6xl mx-auto">--}}
{{--                    <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8">--}}
{{--                        <div>--}}
{{--                            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-2">Project Archive--}}
{{--                            </h2>--}}
{{--                            <p class="text-gray-600 text-center text-sm sm:text-base">Selected completed projects from--}}
{{--                                our extensive portfolio</p>--}}
{{--                        </div>--}}
{{--                        <div class="mt-4 md:mt-0">--}}
{{--                            <select--}}
{{--                                class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#0077B6] focus:border-transparent text-sm sm:text-base">--}}
{{--                                <option>Sort by Year (Newest First)</option>--}}
{{--                                <option>Sort by Client</option>--}}
{{--                                <option>Sort by Location</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Projects Table -->--}}
{{--                    <div class="overflow-x-auto">--}}
{{--                        <table class="min-w-full divide-y divide-gray-200">--}}
{{--                            <thead class="bg-gray-50">--}}
{{--                                <tr>--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        Year</th>--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        Client</th>--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        Location</th>--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        Scope of Work</th>--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        Contractor</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                <!-- 2025 -->--}}
{{--                                <tr class="hover:bg-gray-50">--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2025</td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">OANDO Energy Resources--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Brass Oil Field</td>--}}
{{--                                    <td class="px-6 py-4 text-sm text-gray-500">Diving & Offshore Maintenance Services--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>--}}
{{--                                </tr>--}}

{{--                                <!-- 2024 -->--}}
{{--                                <tr class="hover:bg-gray-50">--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2024</td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">OANDO Energy Resources--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ogbaru-Toru field</td>--}}
{{--                                    <td class="px-6 py-4 text-sm text-gray-500">Pipeline Repairs Diving Support</td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>--}}
{{--                                </tr>--}}

{{--                                <!-- More rows would continue here -->--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                    <!-- Pagination -->--}}
{{--                    <div class="flex items-center justify-between mt-8 text-sm sm:text-base">--}}
{{--                        <div>--}}
{{--                            <p class="text-sm text-gray-700">--}}
{{--                                Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of--}}
{{--                                <span class="font-medium">150</span> projects--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="flex space-x-2">--}}
{{--                            <button--}}
{{--                                class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">--}}
{{--                                Previous--}}
{{--                            </button>--}}
{{--                            <button--}}
{{--                                class="px-3 py-1 border border-[#0077B6] rounded-md text-sm font-medium text-white bg-[#0077B6] hover:bg-[#005a8c]">--}}
{{--                                1--}}
{{--                            </button>--}}
{{--                            <button--}}
{{--                                class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">--}}
{{--                                2--}}
{{--                            </button>--}}
{{--                            <button--}}
{{--                                class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">--}}
{{--                                Next--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
