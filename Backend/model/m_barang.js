module.exports = {
  get: function(con, callback) {
    con.query("SELECT * FROM m_barang", callback)
  },

  getById: function(con, id, callback) {
    con.query(`SELECT * FROM m_barang WHERE id = ${id}`, callback)
  },

  create: function(con, data, callback) {
    con.query(
      `INSERT INTO m_barang SET 
      kode = '${data.kode}',
      nama = '${data.nama}', 
      harga = '${data.harga}'`,
      callback
    )
  },

  update: function(con, data, id, callback) {
    con.query(
      `UPDATE m_barang SET 
      kode = '${data.kode}',
      nama = '${data.nama}', 
      harga = '${data.harga}'
      WHERE kode = '${id}'`,
      callback
    )
  },

  destroy: function(con, id, callback) {
    con.query(`DELETE FROM m_barang WHERE id = ${id}`, callback)
  }
}
