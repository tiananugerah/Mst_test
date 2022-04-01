module.exports = {
  get: function(con, callback) {
    con.query("SELECT * FROM m_customer", callback)
  },

  getById: function(con, id, callback) {
    con.query(`SELECT * FROM m_customer WHERE id = '${id}'`, callback)
  },

  create: function(con, data, callback) {
    con.query(
      `INSERT INTO m_customer SET 
      kode = '${data.kode}',
      name = '${data.name}', 
      telp = '${data.telp}'`,
      callback
    )
  },

  update: function(con, data, id, callback) {
    con.query(
      `UPDATE m_customer SET 
      kode = '${data.kode}',
      name = '${data.name}', 
      telp = '${data.telp}'
      WHERE kode = '${id}'`,
      callback
    )
  },

  destroy: function(con, id, callback) {
    con.query(`DELETE FROM m_customer WHERE id = '${id}'`, callback)
  }
}
