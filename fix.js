const fs = require('fs');
const path = require('path');

function walkDir(dir, callback) {
    fs.readdirSync(dir).forEach(f => {
        let dirPath = path.join(dir, f);
        let isDirectory = fs.statSync(dirPath).isDirectory();
        isDirectory ? walkDir(dirPath, callback) : callback(path.join(dir, f));
    });
}

walkDir('.', function(filePath) {
    if (filePath.endsWith('.php') && !filePath.includes('node_modules')) {
        let content = fs.readFileSync(filePath, 'utf8');
        let newContent = content.replace(/href="\/(?!universalgranite\/)/g, 'href="/universalgranite/');
        if (content !== newContent) {
            fs.writeFileSync(filePath, newContent, 'utf8');
            console.log('Fixed:', filePath);
        }
    }
});
