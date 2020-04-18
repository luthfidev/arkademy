const express    = require('express');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());

app.get("/:name/:age", (req, res) => {
    let name = req.params.name;
    let age  = req.params.age;
    
    if (name != 'luthfi' || age != 24) {
        return res.status(404).send({error: true, message: 'Bukan biodata saya'});
    }

    res.json({
        name: 'Luthfi Widya Ekakusuma',
        age: 24,
        address: 'GKP Blok G4 No 19, Argorejo, Sedayu, Bantul, Yogyakarta',
        hobbies:['Seni bela diri', 'Berenang'],
        is_married: false,
        list_school: [
            {
                name: 'SDN Suryodiningratan III Yogyakarta',
                year_in: '2002',
                year_out: '2008'
            },
            {
                name: 'SMP N 4 Gamping Sleman',
                year_in: '2008',
                year_out: '2011'
            },
            {
                name: 'SMK Muhammadiyah 2 Yogyakarta',
                year_in: '2011',
                year_out: '2014'
            },
            {
                name: 'AMIK BSI YOGYAKARTA',
                year_in: '2014',
                year_out: '2017'
            
            }],
        skills:[
            {
                skill_name: 'Web Programing',
                level: 'advanced'
            },
            {
                skill_name: 'Server Administration',
                level: 'advanced'
            }
        ],
        interest_in_coding: true
            
    });

});

app.listen(3000, () => console.log('Server Sudah aktif di Port 3000'));