const express = require("express")
const router = express.Router()
const c_transaksi = require("../controller/c_transaksi")
const c_barang = require("../controller/c_barang")
const c_customer = require("../controller/c_customer")


//transaksi salse
router.get("/s/", c_transaksi.listS)
router.get("/s/:id", c_transaksi.listidS)
router.post("/s/", c_transaksi.createS)
router.put("/s/:id", c_transaksi.updateS)
router.delete("/s/:id", c_transaksi.destroyS)

//transaksi salse_det
router.get("/sd/", c_transaksi.listSD)
router.get("/sd/:id", c_transaksi.listidSD)
router.post("/sd/", c_transaksi.createSD)
router.put("/sd/:id", c_transaksi.updateSD)
router.delete("/sd/:id", c_transaksi.destroySD)

//customer
router.get("/c/", c_customer.list)
router.get("/c/:id", c_customer.listid)
router.post("/c/", c_customer.create)
router.put("/c/:id", c_customer.update)
router.delete("/c/:id", c_customer.destroy)

//barang
router.get("/b/", c_barang.list)
router.get("/b/:id", c_barang.listid)
router.post("/b/", c_barang.create)
router.put("/b/:id", c_barang.update)
router.delete("/b/:id", c_barang.destroy)
module.exports = router
