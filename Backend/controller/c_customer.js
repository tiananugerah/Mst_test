const customer = require("../model/m_customer")
const ResponseClass = require("../libraries/response") // opsional
var responseReturn = new ResponseClass();
module.exports = {

  list: function(req, res) {
    customer.get(req.con, function(err, rows) {
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
    customer.getById(req.con, req.params.id, function(err, rows) {
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
    customer.create(req.con, req.body, function(err, rows) {
      if (err) {
        throw err
      }else{
        res.status(201).send("Item added ");
      }
      
    })
  },

  update: function(req, res) {    
    customer.update(req.con, req.body, req.params.id, function(err, rows) {
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
  
  destroy: function(req, res) {
    customer.destroy(req.con, req.params.id, function(err) {
      if (err) {
        throw err
      }
      res.status(201).send("Item deleted");
    })
  }
}
