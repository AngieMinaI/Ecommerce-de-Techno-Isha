-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-07-27 07:45:15
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `bdtecnoisha`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `administradores`
--

CREATE TABLE `administradores` (
  `codAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `administradores`
--

INSERT INTO `administradores` (`codAdmin`, `nomeAdmin`, `passwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- テーブルの構造 `categoria`
--

CREATE TABLE `categoria` (
  `codcate` varchar(10) NOT NULL,
  `nomcate` varchar(50) NOT NULL,
  `descate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `categoria`
--

INSERT INTO `categoria` (`codcate`, `nomcate`, `descate`) VALUES
('C01', 'Portátiles', 'Intel'),
('C02', 'Portátiles', 'AMD'),
('C03', 'Zona Gamer', 'Portátiles Gamer'),
('C04', 'Zona Gamer', 'Mouse Gamer'),
('C05', 'Zona Gamer', 'Teclado Gamer'),
('C06', 'Zona Gamer', 'Audifonos Gamer'),
('C07', 'Impresoras', 'Con tanque de tinta'),
('C08', 'PC- Componentes', 'Procesador'),
('C09', 'PC- Componentes', 'Placa Madre'),
('C10', 'PC- Componentes', 'Memoria Ram'),
('C11', 'PC- Componentes', 'Almacenamiento'),
('C12', 'PC- Componentes', 'Tarjeta de Video'),
('C13', 'PC- Componentes', 'Enfriamiento'),
('C14', 'Periféricos', 'Audífonos '),
('C15', 'Periféricos', 'Estabilizadores de energía'),
('C16', 'Periféricos', 'Kit Teclado- Mouse'),
('C17', 'Periféricos', 'Mouse'),
('C18', 'Periféricos', 'Teclado'),
('C19', 'Periféricos', 'Parlantes'),
('C20', 'Monitores', 'Monitores Estándar '),
('C21', 'Monitores', 'Monitores Gamer'),
('C22', 'Suministros', 'Tintas'),
('C23', 'Suministros', 'Toners'),
('C24', 'Accesorios', 'Cámara Web'),
('C25', 'Accesorios', 'Mochilas'),
('C26', 'Accesorios', 'Almacenamiento'),
('C27', 'Accesorios', 'Redes Inalámbricas');

-- --------------------------------------------------------

--
-- テーブルの構造 `consumidorrec`
--

CREATE TABLE `consumidorrec` (
  `codrec` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `tipoDoc` varchar(20) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `nroDoc` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `correo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `detallereclamo`
--

CREATE TABLE `detallereclamo` (
  `codrec` varchar(20) NOT NULL,
  `CodPedido` varchar(20) NOT NULL,
  `TipoBien` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `monto` double(10,2) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `productos`
--

CREATE TABLE `productos` (
  `CodProd` varchar(10) NOT NULL,
  `NomProd` varchar(100) NOT NULL,
  `PreProd` double(10,2) NOT NULL,
  `FotoProd` varchar(100) NOT NULL,
  `codcate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `productos`
--

INSERT INTO `productos` (`CodProd`, `NomProd`, `PreProd`, `FotoProd`, `codcate`) VALUES
('P0001', 'LAPTOP LENOVO D330-10IGL, CELERON 4020 8GB 128GB SSD 10,1 W10', 1099.00, '../images/productos/Portatiles/intel1.webp', 'C01'),
('P0002', 'LAPTOP HP 14-DK1015LA AMD ATHLON-3050U 4GB 256GB SSD 14 HD WINDOWS 10', 1999.95, '../images/productos/Portatiles/intel2.webp', 'C01'),
('P0003', 'Notebook Dell Inspiron 15 3501, 15.6 HD Core i3-1115G4 hasta 4.1GHz, 4GB DDR4, 1TB SATA', 2399.00, '../images/productos/Portatiles/intel3.webp', 'C01'),
('P0004', 'PORTATIL ASUS X515JA-EJ2720W I3-1005G1 256GB SSD 8GB UMA 15.6 FHD IPS', 3399.00, '../images/productos/Portatiles/intel4.webp', 'C01'),
('P0005', 'LAPTOP LENOVO IP3 14ADA05 AMD ATHLON SILVER 3050U 8GB 1TB 14,1\"HD WINDOWS 10', 1999.00, '../images/productos/Portatiles/amd1.webp', 'C02'),
('P0006', 'LAPTOP LENOVO IP 3 14ADA05 AMD RYZEN 3 3250U 8GB 1TB 14.1\" HD WINDOWS 10', 2299.00, '../images/productos/Portatiles/amd2.webp', 'C02'),
('P0007', 'LENOVO RYZEN 5 5500U 8GB 256GB SSD 14 82LM00BSLM', 2699.00, '../images/productos/Portatiles/amd3.webp', 'C02'),
('P0008', 'LAPTOP ASUS M515DA-BQ889T AMD RYZEN 5 3500U 12GB 256GB SSD 15,6\" FHD WINDOWS 10', 2999.00, '../images/productos/Portatiles/amd4.webp', 'C02'),
('P0009', 'LAPTOP MSI GF63 INTEL CORE I5 10500H 8GB 512GB 15,6\"FHD FREEDOS 4GB NVIDIA GTX1650', 4299.00, '../images/productos/ZonaGamer/pg1.webp', 'C03'),
('P0010', 'LAPTOP HP 15-EC1029LA AMD RYZEN 7 4800H 12GB 512GB SSD 15,6\"FHD WINDOWS 10 4GB NVIDIA GTX1650TI', 5499.00, '../images/productos/ZonaGamer/pg2.webp', 'C03'),
('P0011', 'LAPTOP ASUS TUF FX506HC-HN002 CORE I5 11400H 8GB 512GB 15,6\"FHD FREEDOS 4GB NVIDIA RTX3050', 5299.00, '../images/productos/ZonaGamer/pg3.webp', 'C03'),
('P0012', 'LAPTOP ASUS GA401II-HE003T AMD RYZEN 7 4800HS 512GB 16GB 14,1\"FHD WINDOWS 10 4GB NVIDIA GTX1650TI', 5999.00, '../images/productos/ZonaGamer/pg4.webp', 'C03'),
('P0013', 'MOUSE HALION GAMING OHIO HA-M203 4B LED', 31.05, '../images/productos/ZonaGamer/mg1.webp', 'C04'),
('P0014', 'MOUSE HALION GAMING COMBAT HA-M260 6B LED', 40.20, '../images/productos/ZonaGamer/mg2.webp', 'C04'),
('P0015', 'MOUSE GAMER MICRONICS KRUGGER M800', 44.44, '../images/productos/ZonaGamer/mg3.webp', 'C04'),
('P0016', 'MOUSE MICRONICS XFORCE MIC M837', 50.60, '../images/productos/ZonaGamer/mg4.webp', 'C04'),
('P0017', 'TECLADO HALION GAMING DIAMOND HA-K658', 59.00, '../images/productos/ZonaGamer/tg1.webp', 'C05'),
('P0018', 'TECLADO HALION GAMING SPECTRE HA-KG 927', 52.90, '../images/productos/ZonaGamer/tg2.webp', 'C05'),
('P0019', 'TECLADO MECANICO MICRONICS KRATOSS FK1008', 158.70, '../images/productos/ZonaGamer/tg3.webp', 'C05'),
('P0020', 'TECLADO ANTRYX CHROME STORM SK570', 153.20, '../images/productos/ZonaGamer/tg4.webp', 'C05'),
('P0021', 'AURICULAR HYPERX CLOUD STINGER', 208.70, '../images/productos/ZonaGamer/au1.webp', 'C06'),
('P0022', 'AUDIFONOS ANTRYX CS THUNDER SILVER', 199.82, '../images/productos/ZonaGamer/au2.webp', 'C06'),
('P0023', 'AUDIFONOS MICRONICS LUDICO MIC HG802', 75.90, '../images/productos/ZonaGamer/au3.webp', 'C06'),
('P0024', 'AURICULAR REDRAGON PANDORA2 H350RGB-1', 146.06, '../images/productos/ZonaGamer/au4.webp', 'C06'),
('P0025', 'IMPRESORA HP INK TANK WIRELESS 415', 910.85, '../images/productos/Impresoras/imp1.webp', 'C07'),
('P0026', 'IMPRESORA EPSON MULTIFUNCIONAL ECO TANK L3210', 880.95, '../images/productos/Impresoras/imp2.webp', 'C07'),
('P0027', 'IMPRESORA BROTHER DCP - T520W', 943.95, '../images/productos/Impresoras/imp3.webp', 'C07'),
('P0028', 'IMPRESORA EPSON ECOTANK L5290', 1445.79, '../images/productos/Impresoras/imp4.webp', 'C07'),
('P0029', 'PROCESADOR INTEL I3 - 10100F', 417.05, '../images/productos/PC-Componentes/pro1.webp', 'C08'),
('P0030', 'PROCESADOR INTEL I3 - 10105F', 482.60, '../images/productos/PC-Componentes/pro2.webp', 'C08'),
('P0031', 'AMD PROCESADOR RYZEN 5 3400G 3.70GHZ', 1127.48, '../images/productos/PC-Componentes/pro3.png', 'C08'),
('P0032', 'AMD PROCESADOR RYZEN 3 3200G AM4', 754.30, '../images/productos/PC-Componentes/pro4.png', 'C08'),
('P0033', 'PLACA MADRE MSI H310M PRO - VDH', 267.75, '../images/productos/PC-Componentes/pm1.webp', 'C09'),
('P0034', 'PLACA MADRE MSI A320M-A PRO M2', 283.80, '../images/productos/PC-Componentes/pm2.webp', 'C09'),
('P0035', 'PLACA MADRE ASUS PRIME B460M-A R2.0', 451.10, '../images/productos/PC-Componentes/pm3.webp', 'C09'),
('P0036', 'PLACA MADRE GIGABYTE A520M S2H', 308.70, '../images/productos/PC-Componentes/pm4.webp', 'C09'),
('P0037', 'MEMORIA SODIMM KINGSTON SODIMM 4GB 10600 CL9', 169.17, '../images/productos/PC-Componentes/mem1.webp', 'C10'),
('P0038', 'MEMORIA RAM CORSAIR CORSAIR 8GB 2666 DDR4 VENGEANCE LPX', 269.19, '../images/productos/PC-Componentes/mem2.webp', 'C10'),
('P0039', 'MEMORIA SODIMM HP SODIMM 8GB 2666 DDR4 S1 SERIES', 296.37, '../images/productos/PC-Componentes/mem3.webp', 'C10'),
('P0040', 'MEMORIA RAM HP 8GB 2666 DDR4 V6 SERIES', 230.74, '../images/productos/PC-Componentes/mem4.webp', 'C10'),
('P0041', 'SSD KINGSTON 120 GB A400 2.5', 165.00, '../images/productos/PC-Componentes/alm1.webp', 'C11'),
('P0042', 'DISCO WESTERN DIGITAL WD10EZEX', 205.00, '../images/productos/PC-Componentes/alm2.webp', 'C11'),
('P0043', 'SSD WESTERN DIGITAL WD GREEN 480 M.2', 345.07, '../images/productos/PC-Componentes/alm3.webp', 'C11'),
('P0044', 'DISCO SEAGATE BARRACUDA 2TB', 283.92, '../images/productos/PC-Componentes/alm4.webp', 'C11'),
('P0045', 'Tarjeta Grafica ASUS Dual AMD Radeon RX 6600 8GB GDDR6', 2451.52, '../images/productos/PC-Componentes/tv1.jpg', 'C12'),
('P0046', 'Tarjeta Grafica ASUS Dual NVIDIA GeForce RTX 2060 OC EVO 6GB GDDR6 (DUAL-RTX2060-O6G-EVO)', 2438.40, '../images/productos/PC-Componentes/tv2.jpg', 'C12'),
('P0047', 'Tarjeta Grafica MSI AMD Radeon RX 6800 XT GAMING X TRIO 16GB GDDR6', 6860.10, '../images/productos/PC-Componentes/tv3.jpg', 'C12'),
('P0048', 'Tarjeta Grafica ZOTAC Gaming GeForce RTX™ 3090 Ti AMP Extreme Holo 24GB GDDR6X', 9510.90, '../images/productos/PC-Componentes/tv4.jpg', 'C12'),
('P0049', 'CORSAIR SISTEMA DE ENFRIAMIENTO LIQUIDO HYDRO H80I V2 C/1 FAN S/RGB', 469.58, '../images/productos/PC-Componentes/enf1.png', 'C13'),
('P0050', 'CORSAIR SISTEMA DE ENFRIAMENTO LIQUIDO H100I RGB PLATINIUM C/2 FAN C/RGB', 744.26, '../images/productos/PC-Componentes/enf2.png', 'C13'),
('P0051', 'THERMALTAKE SISTEMA DE ENFRIAMIENTO LIQUIDO 240 TH240 ARGB SYNC', 430.92, '../images/productos/PC-Componentes/enf3.png', 'C13'),
('P0052', 'ANTRYX SISTEMA DE ENFRIAMIENTO LIQUIDO TRITON 120C ARGB', 276.04, '../images/productos/PC-Componentes/enf4.png', 'C13'),
('P0053', 'AUDIFONOS HALION T-3 ANARANJADO', 27.00, '../images/productos/Perifericos/aud1.webp', 'C14'),
('P0054', 'AUDIFONOS TEROS BT TE-8080 BK', 48.95, '../images/productos/Perifericos/aud2.webp', 'C14'),
('P0055', 'AUDIFONOS MEETION MT - HP010', 79.00, '../images/productos/Perifericos/aud3.webp', 'C14'),
('P0056', 'AURICULAR JBL T115 BLACK', 79.00, '../images/productos/Perifericos/aud4.webp', 'C14'),
('P0057', 'SUPRESOR DE PICO 6 TOMAS UNIVERSALES CON CABLE DE PODER DE 1.50 METROS ENERGIT', 60.00, '../images/productos/Perifericos/ee1.jpg', 'C15'),
('P0058', 'SUPRESOR DE PICO POWER RACK 8 TOMAS UNIVERSALES CON CABLE DE PODER DE 1.50 METROS ENERGIT', 80.00, '../images/productos/Perifericos/ee2.jpg', 'C15'),
('P0059', 'CABLE DE PODER PARA PC DE 1.80 METROS CALIBRE 3X18 AWG TRAUTECH', 25.00, '../images/productos/Perifericos/ee3.png', 'C15'),
('P0060', 'ADAPTADOR DE CORRIENTE UPS C14 MACHO A UNIVERSAL HEMBRA TRAUTECH', 30.00, '../images/productos/Perifericos/ee4.jpeg', 'C15'),
('P0061', 'KIT TECLADO Y MOUSE HALION GAMING MIRAGE HA - 810C', 75.24, '../images/productos/Perifericos/kit1.webp', 'C16'),
('P0062', 'KIT TECLADO Y MOUSE MICRONICS XFORCE MIC GT8808', 107.00, '../images/productos/Perifericos/kit2.webp', 'C16'),
('P0063', 'COMBO 2 EN 1 REDRAGON K503-RGB-SP M601 S101-3-SP', 210.00, '../images/productos/Perifericos/kit3.webp', 'C16'),
('P0064', 'KIT TECLADO Y MOUSE LOGITECH MK220', 101.68, '../images/productos/Perifericos/kit4.webp', 'C16'),
('P0065', 'MOUSE GENIUS NX - 7010 - ROJO', 24.00, '../images/productos/Perifericos/ms1.webp', 'C17'),
('P0066', 'MOUSE LOGITECH M170 NEGRO', 37.35, '../images/productos/Perifericos/ms2.webp', 'C17'),
('P0067', 'MOUSE LENOVO 400', 52.62, '../images/productos/Perifericos/ms3.webp', 'C17'),
('P0068', 'MOUSE MICRONICS RANGER RX MIC M822X', 45.00, '../images/productos/Perifericos/ms4.webp', 'C17'),
('P0069', 'LOGITECH COMBO TECLADO Y MOUSE DESKTOP MK120 USB\r\n\r\n', 59.33, '../images/productos/Perifericos/t1.png', 'C18'),
('P0070', 'LOGITECH TECLADO ALAMBRICO K120 USB NEGRO\r\n\r\n', 31.31, '../images/productos/Perifericos/t2.png', 'C18'),
('P0071', 'LOGITECH TECLADO MECANICO GAMER CARBON G413 ROMER-G USB RED\r\n\r\n', 482.04, '../images/productos/Perifericos/t3.png', 'C18'),
('P0072', 'Microsoft Teclado Alámbrico Wired Keyboard 600 USB\r\n\r\n', 115.71, '../images/productos/Perifericos/t4.png', 'C18'),
('P0073', 'PARLANTE HALION HA - S15 AMARILLO\r\n\r\n', 33.44, '../images/productos/Perifericos/spk1.webp', 'C19'),
('P0074', 'PARLANTE HALION HA - S15 NARANJA\r\n\r\n', 33.44, '../images/productos/Perifericos/spk2.webp', 'C19'),
('P0075', 'PARLANTE MICRONICS ZOOM 2 MIC S402R\r\n\r\n', 34.00, '../images/productos/Perifericos/spk3.webp', 'C19'),
('P0076', 'PARLANTE MICRONICS ZOOM 2 MIC S402B\r\n\r\n', 34.00, '../images/productos/Perifericos/spk4.webp', 'C19'),
('P0077', 'PARLANTE MICRONICS SWING - MIC S6001BT\r\n\r\n', 130.00, '../images/productos/Perifericos/spk5.webp', 'C19'),
('P0078', 'PARLANTE MICRONICS PLAYER MIC S601BT LED\r\n\r\n', 149.00, '../images/productos/Perifericos/spk6.webp', 'C19'),
('P0079', 'PARLANTE HALION HA - S118 RGB\r\n\r\n', 37.62, '../images/productos/Perifericos/spk7.webp', 'C19'),
('P0080', 'PARLANTE MICRONICS MIRAGE - MIC S326\r\n\r\n', 39.00, '../images/productos/Perifericos/spk8.webp', 'C19'),
('P0081', 'MONITOR LENOVO L24E-30 23.8P\r\n\r\n', 599.00, '../images/productos/Monitores/mon1.webp', 'C20'),
('P0082', 'MONITOR SAMSUNG LF24T400FHLXPE\r\n\r\n', 611.52, '../images/productos/Monitores/mon2.webp', 'C20'),
('P0083', 'MONITOR LG 24MK430H\r\n\r\n', 620.26, '../images/productos/Monitores/mon3.webp', 'C20'),
('P0084', 'MONITOR DELL P2219H\r\n\r\n', 1062.38, '../images/productos/Monitores/mon4.webp', 'C20'),
('P0085', 'Monitor ASUS VZ279HEG1R 27″ FHD IPS/1ms/FreeSync\r\n\r\n', 793.35, '../images/productos/Monitores/mong1.jpg', 'C21'),
('P0086', 'Monitor Gaming ACER KG271 27″ FHD 144Hz/1ms/FreeSync Compatible\r\n\r\n', 1103.70, '../images/productos/Monitores/mong2.jpg', 'C21'),
('P0087', 'Monitor Gaming ASUS ROG Strix XG27AQ 27″ WQHD 1ms/170Hz/G-sync Compatible\r\n\r\n', 2646.00, '../images/productos/Monitores/mong3.jpg', 'C21'),
('P0088', 'Monitor Gaming ASUS TUF Gaming VG258QM 24.5″ FHD 0.5ms/280Hz/G-sync Compatible\r\n\r\n', 1657.50, '../images/productos/Monitores/mong4.jpg', 'C21'),
('P0089', 'Monitor Gaming BenQ Zowie XL2411P 24″ LCD/144Hz/1ms/ PC e-Sports\r\n\r\n', 1189.50, '../images/productos/Monitores/mong5.jpg', 'C21'),
('P0090', 'Monitor Gaming Gigabyte Aorus CV27Q 27″ Curvo QHD HDR/ELED/1ms/VA/165Hz\r\n\r\n', 2375.00, '../images/productos/Monitores/mong6.jpg', 'C21'),
('P0091', 'Monitor Gaming LG 24GL600F-B 23.6″ FHD 144Hz/1ms/HDMI/DP\r\n\r\n', 916.50, '../images/productos/Monitores/mong7.jpg', 'C21'),
('P0092', 'Monitor Gaming Samsung Odyssey G3 F24G35TFW 24″ 144Hz/1ms/AMD FreeSync\r\n\r\n', 931.00, '../images/productos/Monitores/mong8.jpg', 'C21'),
('P0093', 'TINTAS EPSON T664220 664 CYAN\r\n\r\n', 39.90, '../images/productos/Suministros/tin1.webp', 'C22'),
('P0094', 'TINTAS EPSON T664220 664 MAGENTA\r\n\r\n', 39.90, '../images/productos/Suministros/tin2.webp', 'C22'),
('P0095', 'TINTAS EPSON T664220 664 YELLOW\r\n\r\n', 39.90, '../images/productos/Suministros/tin3.webp', 'C22'),
('P0096', 'TINTAS EPSON T664220 664 NEGRO\r\n\r\n', 39.90, '../images/productos/Suministros/tin4.webp', 'C22'),
('P0097', 'TINTAS HP GT52 MAGENTA\r\n\r\n', 37.80, '../images/productos/Suministros/tin5.webp', 'C22'),
('P0098', 'TINTAS HP GT52 AMARILLO\r\n\r\n', 37.80, '../images/productos/Suministros/tin6.webp', 'C22'),
('P0099', 'TINTAS BROTHER BT6001BK NEGRO\r\n\r\n\r\n', 35.90, '../images/productos/Suministros/tin7.webp', 'C22'),
('P0100', 'TINTAS BROTHER BT5001Y YELLOW\r\n\r\n', 35.90, '../images/productos/Suministros/tin8.webp', 'C22'),
('P0101', 'TONER HP CF217A 17A\r\n\r\n', 286.00, '../images/productos/Suministros/ton1.webp', 'C23'),
('P0102', 'TONER HP W1103A 103A\r\n\r\n', 103.50, '../images/productos/Suministros/ton2.webp', 'C23'),
('P0103', 'TONER HP CF230A 30A\r\n\r\n', 291.00, '../images/productos/Suministros/ton3.webp', 'C23'),
('P0104', 'TONER HP CE271A 650A CYAN\r\n\r\n', 1738.80, '../images/productos/Suministros/ton4.webp', 'C23'),
('P0105', 'WEB CAM GENERICA 1080P\r\n\r\n', 99.00, '../images/productos/Accesorios/webcam1.webp', 'C24'),
('P0106', 'WEB CAM CYBERTEL DVINCI CYB WC1000\r\n\r\n', 59.00, '../images/productos/Accesorios/webcam2.webp', 'C24'),
('P0107', 'WEB CAM LOGITECH C270\r\n\r\n', 153.76, '../images/productos/Accesorios/webcam3.webp', 'C24'),
('P0108', 'CÁMARA WEB XIAOMI CMSCJ22A FULL HD 1080P\r\n\r\n', 160.00, '../images/productos/Accesorios/webcam4.jpg', 'C24'),
('P0109', 'MOCHILA HP ACTIVE\r\n\r\n', 49.00, '../images/productos/Accesorios/mochila1.webp', 'C25'),
('P0110', 'MOCHILA LENOVO CASUAL B210 BLACK\r\n\r\n', 89.00, '../images/productos/Accesorios/mochila2.webp', 'C25'),
('P0111', 'MOCHILA LENOVO GAMING 15.6 BACKPACK\r\n\r\n', 199.00, '../images/productos/Accesorios/mochila3.webp', 'C25'),
('P0112', 'MOCHILA HP TRAVEL USB 3 EN 1\r\n\r\n', 199.00, '../images/productos/Accesorios/mochila4.webp', 'C25'),
('P0113', 'MOCHILA HP PAVILON TECH GREY BACKPACK\r\n\r\n', 136.95, '../images/productos/Accesorios/mochila5.webp', 'C25'),
('P0114', 'MOCHILA HP ODYSSEY GREY AND GREEN\r\n\r\n', 229.00, '../images/productos/Accesorios/mochila6.webp', 'C25'),
('P0115', 'KLIP XTREME FUNDA REVERSIBLE PARA TABLET DE 10.1″ KSN-110\r\n\r\n', 25.54, '../images/productos/Accesorios/mochila7.png', 'C25'),
('P0116', 'MOCHILA LENOVO LEGION 15.6 RECON GAMING BACKPACK\r\n\r\n', 299.00, '../images/productos/Accesorios/mochila8.webp', 'C25'),
('P0117', 'MEMORIA USB SANDISK CRUZER BLADE 8GB NEGRO\r\n\r\n', 16.60, '../images/productos/Accesorios/alme1.webp', 'C26'),
('P0118', 'MEMORIA USB KINGSTON DATATRAVELER G4 32GB\r\n\r\n', 35.00, '../images/productos/Accesorios/alme2.webp', 'C26'),
('P0119', 'MEM MICRO SD SANDISK ULTRA 16GB 98 MB\r\n\r\n', 25.00, '../images/productos/Accesorios/alme3.webp', 'C26'),
('P0120', 'MEM MICRO SD KINGSTON 64GB 100 MB\r\n\r\n', 61.00, '../images/productos/Accesorios/alme4.webp', 'C26'),
('P0121', 'ANTENAS TP-LINK TL-WN781ND\r\n\r\n', 54.53, '../images/productos/Accesorios/wireless1.webp', 'C27'),
('P0122', 'USB WIFI TP - LINK TL-WN725N\r\n\r\n', 39.90, '../images/productos/Accesorios/wireless2.webp', 'C27'),
('P0123', 'ACCES POINT TP-LINK TL - WA801ND\r\n\r\n', 91.30, '../images/productos/Accesorios/wireless3.webp', 'C27'),
('P0124', 'REPETIDOR TP-LINK TL-WA855RE WIRELESS N WALL PLUG 300 MBPS\r\n\r\n', 119.00, '../images/productos/Accesorios/wireless4.jpg', 'C27');

-- --------------------------------------------------------

--
-- テーブルの構造 `servicios`
--

CREATE TABLE `servicios` (
  `IDServicio` varchar(4) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `servicios`
--

INSERT INTO `servicios` (`IDServicio`, `descripcion`) VALUES
('S001', 'Soporte Técnico'),
('S002', 'Formateo y Particionamiento'),
('S003', 'Instalación de Sistemas Operativos'),
('S004', 'Mantenimiento Adecuado'),
('S005', 'Instalación de programas, antivirus, etc.'),
('S006', 'Asesoría de armado de PC'),
('S007', 'Reparacion de todas las partes de la PC');

-- --------------------------------------------------------

--
-- テーブルの構造 `tecnicos`
--

CREATE TABLE `tecnicos` (
  `IDTecnico` varchar(4) NOT NULL,
  `nomtec` varchar(30) NOT NULL,
  `apetec` varchar(30) NOT NULL,
  `IDServicio` varchar(4) NOT NULL,
  `fototec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tecnicos`
--

INSERT INTO `tecnicos` (`IDTecnico`, `nomtec`, `apetec`, `IDServicio`, `fototec`) VALUES
('T001', 'Juan', 'Guerrero', 'S002', 'equipo1.jpg'),
('T002', 'Betty', 'Mendoza', 'S003', 'equipo2.jpg'),
('T003', 'Raquel', 'Perez', 'S006', 'equipo4.jpg'),
('T004', 'Oscar', 'Vega', 'S005', 'equipo3.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `usuario`
--

CREATE TABLE `usuario` (
  `codusu` int(11) NOT NULL,
  `nomeusu` varchar(30) NOT NULL,
  `passwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `usuario`
--

INSERT INTO `usuario` (`codusu`, `nomeusu`, `passwd`) VALUES
(1, 'user', '123');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`codAdmin`);

--
-- テーブルのインデックス `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codcate`);

--
-- テーブルのインデックス `consumidorrec`
--
ALTER TABLE `consumidorrec`
  ADD PRIMARY KEY (`nroDoc`);

--
-- テーブルのインデックス `detallereclamo`
--
ALTER TABLE `detallereclamo`
  ADD PRIMARY KEY (`CodPedido`),
  ADD KEY `codrec` (`codrec`);

--
-- テーブルのインデックス `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodProd`),
  ADD KEY `codcate` (`codcate`);

--
-- テーブルのインデックス `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`IDServicio`);

--
-- テーブルのインデックス `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`IDTecnico`),
  ADD KEY `IDServicio` (`IDServicio`);

--
-- テーブルのインデックス `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nomeusu`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `administradores`
--
ALTER TABLE `administradores`
  MODIFY `codAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `detallereclamo`
--
ALTER TABLE `detallereclamo`
  ADD CONSTRAINT `detallereclamo_ibfk_1` FOREIGN KEY (`codrec`) REFERENCES `consumidorrec` (`nroDoc`);

--
-- テーブルの制約 `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`codcate`) REFERENCES `categoria` (`codcate`);

--
-- テーブルの制約 `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `tecnicos_ibfk_1` FOREIGN KEY (`IDServicio`) REFERENCES `servicios` (`IDServicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
