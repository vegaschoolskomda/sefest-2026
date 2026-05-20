lucide.createIcons();

const jobSearch = document.getElementById("job-search");
const jobCategory = document.getElementById("job-category");
const jobLocation = document.getElementById("job-location");
const jobSalary = document.getElementById("job-salary");
const jobCards = Array.from(document.querySelectorAll(".jobs-card"));

const modal = document.getElementById("job-modal");
const modalTitle = document.getElementById("modal-title");
const modalDesc = document.getElementById("modal-desc");
const modalMeta = document.getElementById("modal-meta");
const modalClose = document.getElementById("modal-close");

const simJob = document.getElementById("sim-job");
const simDesc = document.getElementById("sim-desc");
const simQuestion = document.getElementById("sim-question");
const simOptions = document.getElementById("sim-options");
const simSubmit = document.getElementById("sim-submit");
const simResult = document.getElementById("sim-result");

const templateCards = Array.from(document.querySelectorAll(".template-card"));
const preview = document.getElementById("portfolio-preview");
const colorPicker = document.getElementById("color-picker");
const fontSelect = document.getElementById("font-select");

const simData = {
	ui: {
		desc: "Mendesain antarmuka dan sistem desain yang konsisten.",
		question: "Pilih layout terbaik untuk landing page aplikasi keuangan.",
		options: [
			"Layout A: fokus pada CTA dan ringkasan produk.",
			"Layout B: menonjolkan gallery dan testimoni.",
			"Layout C: menampilkan tabel harga di atas.",
		],
		answer: 0,
		feedback: "Layout yang menonjolkan CTA akan membantu konversi lebih cepat.",
	},
	dev: {
		desc: "Membangun aplikasi web, API, dan integrasi sistem.",
		question: "Pilih solusi logika untuk validasi input angka positif.",
		options: [
			"Gunakan if (x > 0) sebelum proses.",
			"Gunakan if (x == 0) saja.",
			"Gunakan if (x < 0) saja.",
		],
		answer: 0,
		feedback: "Validasi positif memastikan data bersih sebelum proses lanjut.",
	},
	creator: {
		desc: "Menyusun strategi konten dan storytelling untuk audiens.",
		question: "Strategi konten terbaik untuk brand edukasi?",
		options: [
			"Edukatif, konsisten, dan gunakan format carousel.",
			"Hanya fokus konten hiburan viral.",
			"Posting acak tanpa kalender konten.",
		],
		answer: 0,
		feedback: "Konten edukatif yang konsisten membangun kredibilitas brand.",
	},
	data: {
		desc: "Menganalisis data dan menyajikan insight.",
		question: "Metode terbaik untuk melihat tren penjualan bulanan?",
		options: [
			"Gunakan line chart dan moving average.",
			"Gunakan tabel teks tanpa visual.",
			"Gunakan pie chart untuk semua bulan.",
		],
		answer: 0,
		feedback: "Line chart membantu melihat tren dari waktu ke waktu.",
	},
};

function filterJobs() {
	const searchValue = jobSearch.value.toLowerCase();
	const categoryValue = jobCategory.value;
	const locationValue = jobLocation.value;
	const salaryValue = jobSalary.value;

	jobCards.forEach((card) => {
		const title = card.dataset.title.toLowerCase();
		const category = card.dataset.category;
		const location = card.dataset.location;
		const salary = card.dataset.salary;

		const matchesSearch = title.includes(searchValue);
		const matchesCategory = !categoryValue || categoryValue === category;
		const matchesLocation = !locationValue || locationValue === location;
		const matchesSalary = !salaryValue || salaryValue === salary;

		if (matchesSearch && matchesCategory && matchesLocation && matchesSalary) {
			card.style.display = "flex";
		} else {
			card.style.display = "none";
		}
	});

}


jobSearch.addEventListener("input", filterJobs);
jobCategory.addEventListener("change", filterJobs);
jobLocation.addEventListener("change", filterJobs);
jobSalary.addEventListener("change", filterJobs);

document.querySelectorAll(".job-detail").forEach((btn) => {
	btn.addEventListener("click", (event) => {
		const card = event.target.closest(".jobs-card");
		modalTitle.textContent = card.dataset.title;
		modalDesc.textContent = card.dataset.desc;
		modalMeta.innerHTML = "";
		[
			`Lokasi: ${card.dataset.location}`,
			`Skill: ${card.dataset.skill}`,
			`Gaji: Rp ${card.dataset.salary} juta+`,
			`Tren: ${card.dataset.trend}`,
		].forEach((text) => {
			const span = document.createElement("span");
			span.className = "tag";
			span.textContent = text;
			modalMeta.appendChild(span);
		});
		modal.classList.add("active");
	});
});
modalClose.addEventListener("click", () => modal.classList.remove("active"));
modal.addEventListener("click", (event) => {
	if (event.target === modal) {
		modal.classList.remove("active");
	}
});

function renderSimulation(jobKey) {
	const data = simData[jobKey];
	simDesc.textContent = data.desc;
	simQuestion.textContent = data.question;
	simOptions.innerHTML = "";
	data.options.forEach((option, index) => {
		const label = document.createElement("label");
		label.className = "card";
		label.style.cursor = "pointer";
		label.innerHTML = `<input type="radio" name="sim-answer" value="${index}" /> ${option}`;
		simOptions.appendChild(label);
	});
	simResult.style.display = "none";
}

simJob.addEventListener("change", (event) => renderSimulation(event.target.value));

simSubmit.addEventListener("click", () => {
	const selected = document.querySelector("input[name='sim-answer']:checked");
	if (!selected) {
		simResult.style.display = "block";
		simResult.textContent = "Pilih jawaban terlebih dahulu.";
		return;
	}
	const jobKey = simJob.value;
	const correct = parseInt(selected.value, 10) === simData[jobKey].answer;
	simResult.style.display = "block";
	simResult.textContent = correct
		? `Skor 90/100. ${simData[jobKey].feedback}`
		: `Skor 65/100. ${simData[jobKey].feedback}`;
});

templateCards.forEach((card) => {
	card.addEventListener("click", () => {
		templateCards.forEach((item) => item.classList.remove("active"));
		card.classList.add("active");
		const name = card.dataset.template;
		preview.querySelector("h3").textContent = `Preview Template: ${name}`;
		preview.querySelector("p").textContent = `Tata letak ${name.toLowerCase()} untuk portofolio profesional.`;
	});
});

colorPicker.addEventListener("input", (event) => {
	preview.style.borderColor = event.target.value;
});

fontSelect.addEventListener("change", (event) => {
	preview.style.fontFamily = event.target.value === "Poppins" ? "Poppins, sans-serif" : "Inter, sans-serif";
});

document.querySelectorAll(".faq-question").forEach((question) => {
	question.addEventListener("click", () => {
		const item = question.parentElement;
		item.classList.toggle("active");
	});
});

renderSimulation("ui");

const heroProducts = [
	{
		title: "UI/UX Designer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1586717791821-3f44a563cc4c?auto=format&fit=crop&w=1200",
	},
	{
		title: "Frontend Developer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1547082299-de196ea013d6?auto=format&fit=crop&w=1200",
	},
	{
		title: "Backend Engineer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200",
	},
	{
		title: "Data Scientist",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1551288049-bbda48652ad8?auto=format&fit=crop&w=1200",
	},
	{
		title: "Mobile Developer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1200",
	},
	{
		title: "DevOps Engineer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1618401471353-b98aadebc25b?auto=format&fit=crop&w=1200",
	},
	{
		title: "Product Manager",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200",
	},
	{
		title: "Content Specialist",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200",
	},
	{
		title: "Cyber Security",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1200",
	},
	{
		title: "Digital Marketer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200",
	},
	{
		title: "Finance Analyst",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200",
	},
	{
		title: "HR Director",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1200",
	},
	{
		title: "Cloud Architect",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200",
	},
	{
		title: "Quality Assurance",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200",
	},
	{
		title: "Graphic Designer",
		link: "#eksplor",
		thumbnail: "https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=1200",
	},
];

const heroStrip = document.getElementById("hero-strip");
const heroRows = heroStrip ? Array.from(heroStrip.querySelectorAll(".hero-row")) : [];

function renderHeroRows() {
	if (!heroStrip) return;
	heroRows.forEach((row, index) => {
		row.innerHTML = "";
		const slice = heroProducts.slice(index * 5, index * 5 + 5);
		slice.forEach((item) => {
			const card = document.createElement("a");
			card.className = "hero-card";
			card.href = item.link;
			card.innerHTML = `
				<img src="${item.thumbnail}" alt="${item.title}" />
				<div class="overlay"></div>
				<h3>${item.title}</h3>
			`;
			row.appendChild(card);
		});
	});
}

function animateHeroParallax() {
	const hero = document.getElementById("hero-parallax");
	if (!hero) return;
	const rect = hero.getBoundingClientRect();
	const total = rect.height - window.innerHeight;
	const rawProgress = total > 0 ? -rect.top / total : 0;
	const progress = Math.min(Math.max(rawProgress, 0), 1);
	const progressShort = Math.min(progress / 0.2, 1);
	const translate = -700 + progress * 1200;
	const rotateX = 15 - progressShort * 15;
	const rotateZ = 20 - progressShort * 20;
	const opacity = 0.2 + progressShort * 0.8;
	heroStrip.style.transform = `translateY(${translate}px) rotateX(${rotateX}deg) rotateZ(${rotateZ}deg)`;
	heroStrip.style.opacity = opacity.toString();

	heroRows.forEach((row) => {
		const direction = row.dataset.direction === "reverse" ? 1 : -1;
		const offset = progress * 1000 * direction;
		row.style.transform = `translateX(${offset}px)`;
	});
}

renderHeroRows();
animateHeroParallax();
window.addEventListener("scroll", animateHeroParallax);
window.addEventListener("resize", animateHeroParallax);
