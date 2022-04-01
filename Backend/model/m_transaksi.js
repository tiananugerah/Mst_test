module.exports = {
  //sales
  getS: function(con, callback) {
    con.query(`SELECT 
      a.id,
      a.kode as 'no_transaksi', 
      a.tgl as 'tgl', 
      b.name as 'nama', 
      sum(c.qty) as 'jml_barang', 
      a.subtotal as 'sub_total', 
      a.diskon as 'diskon', 
      a.ongkir as 'ongkir', 
      a.total_bayar as 'total_bayar' 
      FROM t_sales a 
      JOIN m_customer b ON a.cust_id= b.id 
      JOIN t_sales_det c ON a.id = c.sales_id 
      GROUP By c.sales_id`, callback)
  },

  getByIdS: function(con, id, callback) {
    con.query(`SELECT 
      a.id,
      a.kode as 'no_transaksi', 
      a.tgl as 'tgl', 
      b.name as 'nama', 
      sum(c.qty) as 'jml_barang', 
      a.subtotal as 'sub_total', 
      a.diskon as 'diskon', 
      a.ongkir as 'ongkir', 
      a.total_bayar as 'total_bayar' 
      FROM t_sales a 
      JOIN m_customer b ON a.cust_id= b.id 
      JOIN t_sales_det c ON a.id = c.sales_id 
      GROUP By c.sales_id 
      where a.id = ${id}`, callback)
  },

  createS: function(con, data, callback) {
    con.query(
      `INSERT INTO t_sales_det SET 
      kode = '${data.kode}', 
      cust_id = '${data.cust_id}',
      subtotal = '${data.subtotal}',
      diskon = '${data.diskon}',
      ongkir = '${data.ongkir}',
      total_bayar = '${data.total_bayar}'`,
      callback
    )
  },

  updateS: function(con, data, id, callback) {
    con.query(
      `UPDATE t_sales SET 
      kode = '${data.kode}', 
      cust_id = '${data.cust_id}',
      subtotal = '${data.subtotal}',
      diskon = '${data.diskon}',
      ongkir = '${data.ongkir}',
      total_bayar = '${data.total_bayar}'
      WHERE id = ${id}`,
      callback
    )
  },

  destroyS: function(con, id, callback) {
    con.query(`DELETE FROM t_sales WHERE id = ${id}`, callback)    
    con.query(`DELETE FROM t_sales_det WHERE id = ${id}`, callback)
  },

  //sales date
  getSD: function(con, callback) {
    con.query(`SELECT 
      b.kode as 'kode_barang', 
      b.nama as 'nama_barang', 
      a.qty as 'qty', 
      a.harga_bandrol, 
      a.diskon_pct, 
      a.diskon_nilai, 
      a.harga_diskon, 
      a.total 
      FROM t_sales_det a 
      JOIN m_barang b ON a.barang_id = b.id`, callback)
  },

  getByIdSD: function(con, id, callback) {
    con.query(`SELECT 
    b.kode as 'kode_barang', 
    b.nama as 'nama_barang', 
    a.qty as 'qty', 
    a.harga_bandrol, 
    a.diskon_pct, 
    a.diskon_nilai, 
    a.harga_diskon, 
    a.total 
    FROM t_sales_det a 
    JOIN m_barang b ON a.barang_id = b.id
     WHERE a.id = ${id}`, callback)
  },

  createSD: function(con, data, callback) {
    con.query(
      `INSERT INTO t_sales_det SET 
      sales_id = '${data.sales_id}', 
      barang_id = '${data.barang_id}',
      harga_bandrol = '${data.harga_bandrol}',
      diskon_pct = '${data.diskon_pct}', 
      diskon_nilai = '${data.diskon_nilai}',
      harga_diskon = '${data.harga_diskon}',
      total = '${data.total}'`,
      callback
    )
  },

  updateSD: function(con, data, id, callback) {
    con.query(
      `UPDATE t_sales_det SET 
      sales_id = '${data.sales_id}', 
      barang_id = '${data.barang_id}',
      harga_bandrol = '${data.harga_bandrol}',
      diskon_pct = '${data.diskon_pct}', 
      diskon_nilai = '${data.diskon_nilai}',
      harga_diskon = '${data.harga_diskon}',
      total = '${data.total}'
      WHERE id = ${id}`,
      callback
    )
  },

  destroySD: function(con, id, callback) {
    con.query(`DELETE FROM t_sales_det WHERE id = ${id}`, callback)
  }
}
