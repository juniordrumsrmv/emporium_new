<?php

use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Inserts inciais para Dashboard
        DB::insert("
        INSERT INTO dash_panel VALUES 
        ('NFCE Status GrÃ¡fico',1,'nfce','{\"chart_type\": \"column\"}'),
        ('Vendas por Loja GrÃ¡fico',1,'sales','{\"chart_type\": \"column\"}'),
        ('Vendas por Vendedor GrÃ¡fico',1,'sales_agent','{\"chart_type\": \"column\",\"goal\":0}'),
        ('Vendas ECF x NFCE x SAT GrÃ¡fic',1,'sales_type','{\"chart_type\": \"column\"}'),
        ('SAT Status GrÃ¡fico',1,'sat','{\"chart_type\": \"column\"}'),
        ('NFCE Status Detalhado',2,'nfce',''),('Vendas por Loja Detalhado',2,'sales',''),
        ('Vendas por Vendedor Detalhado',2,'sales_agent',''),('Vendas ECF x NFCE x SAT Detalh',2,'sales_type',''),
        ('SAT Status Detalhado',2,'sat',''),('Status SEFAZ',3,'nfce',''),('Tipo dos PDVs',3,'sales_type',''),
        ('Status Componente SAT',3,'sat',''),('Status Certificado',4,'nfce',''),('Status Certificado',4,'sat',''),
        ('SAT emitido por PDV GrÃ¡fico',5,'sat','{\"chart_type\": \"column\"}'),('SAT emitido por PDV Detalhado',6,'sat',''),
        ('SAT emitido por hora GrÃ¡fico',7,'sat','{\"chart_type\": \"column\"}'),('SAT emitido por hora Detalhado',8,'sat','{\"date\":null}')
        ");

        DB::insert("
        INSERT INTO dash_module VALUES 
        ('nfce',1,'NFCE',0),
        ('sat',2,'SAT',0),
        ('sales',3,'Vendas por Loja',1),
        ('sales_type',4,'Vendas por Tipo',0),
        ('sales_agent',5,'Vendas por Vendedor',0);
        ");
    }
}
