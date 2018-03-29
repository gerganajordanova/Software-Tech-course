const Article = require('../models').Article;

module.exports = {
    index: (req, res) => {
        Article.findAll({ limit: 6}).then(articles=>{
            res.render('home/index',{articles: articles});
        })
    }
};




