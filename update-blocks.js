const fs = require("fs");
const path = require("path");

// Recursively find all block.json files
function findBlockJsonFiles(dir) {
  let results = [];
  const list = fs.readdirSync(dir);
  list.forEach((file) => {
    const filePath = path.join(dir, file);
    const stat = fs.statSync(filePath);
    if (stat && stat.isDirectory()) {
      results = results.concat(findBlockJsonFiles(filePath));
    } else if (file === "block.json") {
      results.push(filePath);
    }
  });
  return results;
}

// Add the style line if missing
function updateBlockJson(file) {
  const content = JSON.parse(fs.readFileSync(file, "utf8"));
  if (!content.style) {
    content.style = "file:./style-index.css";
    fs.writeFileSync(file, JSON.stringify(content, null, 4));
    console.log(`Updated: ${file}`);
  } else {
    console.log(`Already has style key: ${file}`);
  }
}

// Run the script
const blockFiles = findBlockJsonFiles("./");
blockFiles.forEach(updateBlockJson);
