const transaksi = require("../model/m_transaksi")
const ResponseClass = require("../libraries/response") // opsional
var responseReturn = new ResponseClass();
module.exports = {

  //sales
  listS: function(req, res) {
    transaksi.getS(req.con, function(err, rows) {
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

  listidS: function(req, res) {
    transaksi.getByIdS(req.con, req.params.id, function(err, rows) {
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
  
  createS: function(req, res) {    
    transaksi.createS(req.con, function(err, rows) {
      if (err) {
        throw err
      }
      res.status(201).send("Item added ");
    })
  },

  updateS: function(req, res) {    
    transaksi.getByIdS(req.con, req.params.id, function(err, rows) {
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
  
  destroyS: function(req, res) {
    transaksi.destroyS(req.con, req.params.id, function(err) {
      if (err) {
        throw err
      }
      res.status(201).send("Item deleted");
    })
  },

  //sales date
  listSD: function(req, res) {
    transaksi.getSD(req.con, function(err, rows) {
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

  listidSD: function(req, res) {
    transaksi.getByIdSD(req.con, req.params.id, function(err, rows) {
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
  
  createSD: function(req, res) {    
    transaksi.createSD(req.con, function(err, rows) {
      if (err) {
        throw err
      }
      res.status(201).send("Item added ");
    })
  },

  updateSD: function(req, res) {    
    transaksi.getByIdSD(req.con, req.params.id, function(err, rows) {
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
  
  destroySD: function(req, res) {
    transaksi.destroySD(req.con, req.params.id, function(err) {
      if (err) {
        throw err
      }
      res.status(201).send("Item deleted");
    })
  }
}
