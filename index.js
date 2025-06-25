const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

// Endpoint GET /hello
app.get('/hello', (req, res) => {
  res.json({
    status: 'success',
    message: 'welcome to Maqdis Academy'
  });
});

// Endpoint POST /data
app.post('/data', (req, res) => {
  const data = req.body.data;

  if (!data) {
    return res.status(400).json({
      status: 'data tidak boleh kosong'
    });
  }

  const savedData = data;

  res.json({
    data: savedData,
    status: 'berhasil'
  });
});

// Endpoint POST /hapus
app.post('/hapus', (req, res) => {
  res.json({
    data: 0,
    status: 'berhasil hapus'
  });
});

// Endpoint GET /hapusdata
app.get('/hapusdata', (req, res) => {
  res.json({
    message: "berhasil",
    id_setoran: 58,
    id_user: 3441,
    id_juz: 30
  });
});

app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});