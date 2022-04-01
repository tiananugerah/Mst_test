const barang = require("../model/m_barang")
const ResponseClass = require("../libraries/response") // opsional
var responseReturn = new ResponseClass();
module.exports = {

  list: function(req, res) {
    barang.get(req.con, function(err, rows) {
      if (err) {
        throw err
      }
      responseReturn.status = true;
      responseReturn.code = 200;
      responseReturn.message = "Success";
      responseReturn.data = rows;
      res.status(200).json(responseReturn);
    })
  },

  listid: function(req, res) {
    barang.getById(req.con, req.params.id, function(err, rows) {
      if (err) {
        throw err
      }
      if (responseReturn.rowCount == 0) {
        responseReturn.status = true;
        responseReturn.code = 404;
        responseReturn.message = "Item not found";
        responseReturn.data = null;
      } else {
        responseReturn.status = true;
        responseReturn.code = 200;
        responseReturn.message = "Success";
        responseReturn.data = rows[0];
      }      
      res.status(200).json(responseReturn);
    })
  },
  
  create: function(req, res) {    
    barang.create(req.con, req.body, function(err, rows) {
      if (err) {
        throw err
      }
      res.status(201).send("Item added ");
    })
  },

  update: function(req, res) {    
    barang.update(req.con, req.body, req.params.id, function(err, rows) {
      if (err) {
        throw err
      }
      if (responseReturn.rowCount == 0) {
        responseReturn.status = true;
        responseReturn.code = 404;
        responseReturn.message = "Item not found";
        responseReturn.data = null;
      } else {
        responseReturn.status = true;
        responseReturn.code = 200;
        responseReturn.message = "Success";
      }      
      res.status(200).json(responseReturn);
    })
  },
  
  destroy: function(req, res) {
    barang.destroy(req.con, req.params.id, function(err) {
      if (err) {
        throw err
      }
      res.status(201).send("Item deleted");
    })
  }
}
