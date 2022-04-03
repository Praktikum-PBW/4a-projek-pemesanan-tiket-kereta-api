CREATE TABLE [account] (
  [alamat_email] nvarchar(255),
  [id_pengguna] nvarchar(255),
  [tanggal_lahir] datetime,
  [jenis_kelamin] enum
)
GO

CREATE TABLE [login] (
  [id_pengguna] nvarchar(255) PRIMARY KEY IDENTITY(1, 1),
  [alamat_email] nvarchar(255),
  [password] nvarchar(255)
)
GO

CREATE TABLE [pembayaran] (
  [id_pembayaran] nvarchar(255) PRIMARY KEY IDENTITY(1, 1),
  [id_pembelian] nvarchar(255),
  [id_pengguna] nvarchar(255),
  [nama_kereta] nvarchar(255),
  [kelas] nvarchar(255),
  [waktu_keberangkatan] timestamp,
  [stasiun_keberangkatan] nvarchar(255),
  [stasiun_tujuan] nvarchar(255)
)
GO

CREATE TABLE [register] (
  [nama_lengkap] nvarchar(255),
  [alamat_email] nvarchar(255),
  [password] nvarchar(255),
  [konfirmasi_password] nvarchar(255)
)
GO

CREATE TABLE [pembelian] (
  [id_pembelian] nvarchar(255) PRIMARY KEY IDENTITY(1, 1),
  [id_pembayaran] nvarchar(255),
  [id_pengguna] nvarchar(255),
  [nama_kereta] nvarchar(255),
  [kelas] nvarchar(255),
  [waktu_keberangkatan] timestamp,
  [stasiun_keberangkatan] nvarchar(255),
  [stasiun_tujuan] nvarchar(255)
)
GO

ALTER TABLE [account] ADD FOREIGN KEY ([id_pengguna]) REFERENCES [login] ([id_pengguna])
GO

ALTER TABLE [pembayaran] ADD FOREIGN KEY ([id_pembelian]) REFERENCES [pembelian] ([id_pembelian])
GO

ALTER TABLE [pembayaran] ADD FOREIGN KEY ([id_pengguna]) REFERENCES [login] ([id_pengguna])
GO

ALTER TABLE [pembelian] ADD FOREIGN KEY ([id_pembayaran]) REFERENCES [pembayaran] ([id_pembayaran])
GO

ALTER TABLE [pembelian] ADD FOREIGN KEY ([id_pengguna]) REFERENCES [login] ([id_pengguna])
GO
