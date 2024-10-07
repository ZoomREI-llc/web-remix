const sharp = require("sharp");
const fs = require("fs");
const path = require("path");

const sizes = [150, 300, 768, 1024, 1536, 2048];
const blockFolders = fs
	.readdirSync(path.join(__dirname, "../src"))
	.filter((folder) =>
		fs.existsSync(path.join(__dirname, `../src/${folder}/assets/images`)),
	);

function copySVGs(srcDir, destDir) {
	const svgFiles = fs
		.readdirSync(srcDir)
		.filter((file) => file.endsWith(".svg"));

	svgFiles.forEach((svg) => {
		const destFile = path.join(destDir, svg);
		if (!fs.existsSync(destFile)) {
			fs.copyFileSync(path.join(srcDir, svg), destFile);
			console.log(`Copied ${svg} to ${destDir}`);
		} else {
			console.log(`Skipped copying ${svg}, already up-to-date.`);
		}
	});
}

blockFolders.forEach((blockFolder) => {
	const inputDir = path.join(__dirname, `../src/${blockFolder}/assets/images`);
	const outputDir = path.join(
		__dirname,
		`../build/${blockFolder}/assets/images`,
	);

	if (!fs.existsSync(outputDir)) {
		fs.mkdirSync(outputDir, { recursive: true });
	}

	copySVGs(inputDir, outputDir);

	fs.readdirSync(inputDir).forEach((image) => {
		const ext = path.extname(image).toLowerCase();
		if (ext !== ".svg") {
			const imagePath = path.join(inputDir, image);
			sizes.forEach((size) => {
				const outputPath = path.join(
					outputDir,
					`${path.parse(image).name}-${size}.webp`,
				);
				if (!fs.existsSync(outputPath)) {
					sharp(imagePath)
						.resize({ width: size, withoutEnlargement: true })
						.toFormat("webp")
						.toFile(outputPath)
						.then(() => {
							console.log(`Created ${outputPath}`);
						})
						.catch((err) => {
							console.error(`Error processing image ${imagePath}:`, err);
						});
				} else {
					console.log(`Skipped processing ${image}, already optimized.`);
				}
			});
		}
	});
});
