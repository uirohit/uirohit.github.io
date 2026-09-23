const fs = require('fs');
let content = fs.readFileSync('c:/xampp/htdocs/rohit/ps/indexnew.html', 'utf8');
content = content.replace(/data:image\/[^;]+;base64,[^"]*/g, 'BASE64_IMAGE_REMOVED');
fs.writeFileSync('c:/xampp/htdocs/rohit/ps/scratch_clean.html', content, 'utf8');
console.log('Cleaned file created.');
