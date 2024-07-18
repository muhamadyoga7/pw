/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : db_spfc

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 18/07/2024 18:28:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for basis_aturan
-- ----------------------------
DROP TABLE IF EXISTS `basis_aturan`;
CREATE TABLE `basis_aturan`  (
  `idaturan` int NOT NULL AUTO_INCREMENT,
  `idpenyakit` int NULL DEFAULT NULL,
  PRIMARY KEY (`idaturan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of basis_aturan
-- ----------------------------
INSERT INTO `basis_aturan` VALUES (20, 7);
INSERT INTO `basis_aturan` VALUES (21, 8);
INSERT INTO `basis_aturan` VALUES (22, 9);
INSERT INTO `basis_aturan` VALUES (23, 10);
INSERT INTO `basis_aturan` VALUES (24, 11);
INSERT INTO `basis_aturan` VALUES (25, 12);
INSERT INTO `basis_aturan` VALUES (26, 13);
INSERT INTO `basis_aturan` VALUES (27, 14);
INSERT INTO `basis_aturan` VALUES (28, 15);
INSERT INTO `basis_aturan` VALUES (29, 16);

-- ----------------------------
-- Table structure for detail_basis_aturan
-- ----------------------------
DROP TABLE IF EXISTS `detail_basis_aturan`;
CREATE TABLE `detail_basis_aturan`  (
  `idaturan` int NULL DEFAULT NULL,
  `idgejala` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_basis_aturan
-- ----------------------------
INSERT INTO `detail_basis_aturan` VALUES (20, 29);
INSERT INTO `detail_basis_aturan` VALUES (21, 33);
INSERT INTO `detail_basis_aturan` VALUES (20, 26);
INSERT INTO `detail_basis_aturan` VALUES (20, 30);
INSERT INTO `detail_basis_aturan` VALUES (20, 28);
INSERT INTO `detail_basis_aturan` VALUES (21, 31);
INSERT INTO `detail_basis_aturan` VALUES (21, 25);
INSERT INTO `detail_basis_aturan` VALUES (21, 32);
INSERT INTO `detail_basis_aturan` VALUES (21, 27);
INSERT INTO `detail_basis_aturan` VALUES (22, 36);
INSERT INTO `detail_basis_aturan` VALUES (22, 37);
INSERT INTO `detail_basis_aturan` VALUES (22, 35);
INSERT INTO `detail_basis_aturan` VALUES (22, 34);
INSERT INTO `detail_basis_aturan` VALUES (23, 36);
INSERT INTO `detail_basis_aturan` VALUES (23, 40);
INSERT INTO `detail_basis_aturan` VALUES (24, 36);
INSERT INTO `detail_basis_aturan` VALUES (24, 42);
INSERT INTO `detail_basis_aturan` VALUES (24, 32);
INSERT INTO `detail_basis_aturan` VALUES (24, 28);
INSERT INTO `detail_basis_aturan` VALUES (24, 41);
INSERT INTO `detail_basis_aturan` VALUES (23, 30);
INSERT INTO `detail_basis_aturan` VALUES (23, 38);
INSERT INTO `detail_basis_aturan` VALUES (23, 42);
INSERT INTO `detail_basis_aturan` VALUES (23, 39);
INSERT INTO `detail_basis_aturan` VALUES (25, 36);
INSERT INTO `detail_basis_aturan` VALUES (25, 43);
INSERT INTO `detail_basis_aturan` VALUES (25, 42);
INSERT INTO `detail_basis_aturan` VALUES (25, 25);
INSERT INTO `detail_basis_aturan` VALUES (25, 29);
INSERT INTO `detail_basis_aturan` VALUES (26, 36);
INSERT INTO `detail_basis_aturan` VALUES (26, 30);
INSERT INTO `detail_basis_aturan` VALUES (26, 25);
INSERT INTO `detail_basis_aturan` VALUES (26, 44);
INSERT INTO `detail_basis_aturan` VALUES (27, 33);
INSERT INTO `detail_basis_aturan` VALUES (27, 30);
INSERT INTO `detail_basis_aturan` VALUES (27, 42);
INSERT INTO `detail_basis_aturan` VALUES (27, 27);
INSERT INTO `detail_basis_aturan` VALUES (27, 46);
INSERT INTO `detail_basis_aturan` VALUES (27, 45);
INSERT INTO `detail_basis_aturan` VALUES (28, 48);
INSERT INTO `detail_basis_aturan` VALUES (28, 35);
INSERT INTO `detail_basis_aturan` VALUES (28, 49);
INSERT INTO `detail_basis_aturan` VALUES (28, 47);
INSERT INTO `detail_basis_aturan` VALUES (29, 36);
INSERT INTO `detail_basis_aturan` VALUES (29, 31);
INSERT INTO `detail_basis_aturan` VALUES (29, 26);
INSERT INTO `detail_basis_aturan` VALUES (29, 42);
INSERT INTO `detail_basis_aturan` VALUES (29, 29);
INSERT INTO `detail_basis_aturan` VALUES (29, 50);

-- ----------------------------
-- Table structure for detail_konsultasi
-- ----------------------------
DROP TABLE IF EXISTS `detail_konsultasi`;
CREATE TABLE `detail_konsultasi`  (
  `idkonsultasi` int NULL DEFAULT NULL,
  `idgejala` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_konsultasi
-- ----------------------------
INSERT INTO `detail_konsultasi` VALUES (6, 33);
INSERT INTO `detail_konsultasi` VALUES (6, 31);
INSERT INTO `detail_konsultasi` VALUES (6, 26);
INSERT INTO `detail_konsultasi` VALUES (6, 38);
INSERT INTO `detail_konsultasi` VALUES (6, 25);
INSERT INTO `detail_konsultasi` VALUES (6, 28);
INSERT INTO `detail_konsultasi` VALUES (6, 45);
INSERT INTO `detail_konsultasi` VALUES (6, 39);
INSERT INTO `detail_konsultasi` VALUES (7, 33);
INSERT INTO `detail_konsultasi` VALUES (7, 40);
INSERT INTO `detail_konsultasi` VALUES (7, 30);
INSERT INTO `detail_konsultasi` VALUES (7, 42);
INSERT INTO `detail_konsultasi` VALUES (7, 32);
INSERT INTO `detail_konsultasi` VALUES (7, 27);
INSERT INTO `detail_konsultasi` VALUES (7, 35);
INSERT INTO `detail_konsultasi` VALUES (7, 41);
INSERT INTO `detail_konsultasi` VALUES (7, 49);
INSERT INTO `detail_konsultasi` VALUES (7, 34);
INSERT INTO `detail_konsultasi` VALUES (7, 39);
INSERT INTO `detail_konsultasi` VALUES (8, 33);
INSERT INTO `detail_konsultasi` VALUES (8, 36);
INSERT INTO `detail_konsultasi` VALUES (8, 43);
INSERT INTO `detail_konsultasi` VALUES (8, 30);
INSERT INTO `detail_konsultasi` VALUES (8, 42);
INSERT INTO `detail_konsultasi` VALUES (8, 27);
INSERT INTO `detail_konsultasi` VALUES (8, 35);
INSERT INTO `detail_konsultasi` VALUES (8, 41);
INSERT INTO `detail_konsultasi` VALUES (8, 45);
INSERT INTO `detail_konsultasi` VALUES (8, 34);
INSERT INTO `detail_konsultasi` VALUES (8, 39);
INSERT INTO `detail_konsultasi` VALUES (9, 40);
INSERT INTO `detail_konsultasi` VALUES (9, 43);
INSERT INTO `detail_konsultasi` VALUES (9, 38);
INSERT INTO `detail_konsultasi` VALUES (9, 25);
INSERT INTO `detail_konsultasi` VALUES (9, 32);
INSERT INTO `detail_konsultasi` VALUES (9, 46);
INSERT INTO `detail_konsultasi` VALUES (9, 28);
INSERT INTO `detail_konsultasi` VALUES (9, 41);
INSERT INTO `detail_konsultasi` VALUES (9, 49);
INSERT INTO `detail_konsultasi` VALUES (9, 47);
INSERT INTO `detail_konsultasi` VALUES (9, 50);

-- ----------------------------
-- Table structure for detail_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `detail_penyakit`;
CREATE TABLE `detail_penyakit`  (
  `idkonsultasi` int NULL DEFAULT NULL,
  `idpenyakit` int NULL DEFAULT NULL,
  `persentase` tinyint NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_penyakit
-- ----------------------------
INSERT INTO `detail_penyakit` VALUES (6, 7, 50);
INSERT INTO `detail_penyakit` VALUES (6, 8, 60);
INSERT INTO `detail_penyakit` VALUES (6, 10, 33);
INSERT INTO `detail_penyakit` VALUES (6, 11, 20);
INSERT INTO `detail_penyakit` VALUES (6, 12, 20);
INSERT INTO `detail_penyakit` VALUES (6, 13, 25);
INSERT INTO `detail_penyakit` VALUES (6, 14, 33);
INSERT INTO `detail_penyakit` VALUES (6, 16, 33);
INSERT INTO `detail_penyakit` VALUES (7, 7, 25);
INSERT INTO `detail_penyakit` VALUES (7, 8, 60);
INSERT INTO `detail_penyakit` VALUES (7, 9, 50);
INSERT INTO `detail_penyakit` VALUES (7, 10, 67);
INSERT INTO `detail_penyakit` VALUES (7, 11, 60);
INSERT INTO `detail_penyakit` VALUES (7, 12, 20);
INSERT INTO `detail_penyakit` VALUES (7, 13, 25);
INSERT INTO `detail_penyakit` VALUES (7, 14, 67);
INSERT INTO `detail_penyakit` VALUES (7, 15, 50);
INSERT INTO `detail_penyakit` VALUES (7, 16, 17);
INSERT INTO `detail_penyakit` VALUES (8, 7, 25);
INSERT INTO `detail_penyakit` VALUES (8, 8, 40);
INSERT INTO `detail_penyakit` VALUES (8, 9, 75);
INSERT INTO `detail_penyakit` VALUES (8, 10, 67);
INSERT INTO `detail_penyakit` VALUES (8, 11, 60);
INSERT INTO `detail_penyakit` VALUES (8, 12, 60);
INSERT INTO `detail_penyakit` VALUES (8, 13, 50);
INSERT INTO `detail_penyakit` VALUES (8, 14, 83);
INSERT INTO `detail_penyakit` VALUES (8, 15, 25);
INSERT INTO `detail_penyakit` VALUES (8, 16, 33);
INSERT INTO `detail_penyakit` VALUES (9, 7, 0);
INSERT INTO `detail_penyakit` VALUES (9, 8, 0);
INSERT INTO `detail_penyakit` VALUES (9, 10, 0);
INSERT INTO `detail_penyakit` VALUES (9, 11, 1);
INSERT INTO `detail_penyakit` VALUES (9, 12, 0);
INSERT INTO `detail_penyakit` VALUES (9, 13, 0);
INSERT INTO `detail_penyakit` VALUES (9, 14, 0);
INSERT INTO `detail_penyakit` VALUES (9, 15, 1);
INSERT INTO `detail_penyakit` VALUES (9, 16, 0);

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `idgejala` int NOT NULL AUTO_INCREMENT,
  `nmgejala` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idgejala`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES (25, 'Kulit Kering');
INSERT INTO `gejala` VALUES (26, 'Gatal Parah');
INSERT INTO `gejala` VALUES (27, 'Kulit Merah');
INSERT INTO `gejala` VALUES (28, 'Lepuh kecil (vesikel)');
INSERT INTO `gejala` VALUES (29, 'Kulit menebal');
INSERT INTO `gejala` VALUES (30, 'Kemerahan');
INSERT INTO `gejala` VALUES (31, 'Gatal atau terbakar');
INSERT INTO `gejala` VALUES (32, 'Kulit kering atau pecah-pecah');
INSERT INTO `gejala` VALUES (33, 'Bengkak');
INSERT INTO `gejala` VALUES (34, 'Ruam merah');
INSERT INTO `gejala` VALUES (35, 'Lepuh berisi cairan');
INSERT INTO `gejala` VALUES (36, 'Gatal');
INSERT INTO `gejala` VALUES (37, 'Kulit mengelupas');
INSERT INTO `gejala` VALUES (38, 'Kulit berminyak');
INSERT INTO `gejala` VALUES (39, 'Sisik kuning atau putih');
INSERT INTO `gejala` VALUES (40, 'Gatal di kulit kepala, wajah, atau dada');
INSERT INTO `gejala` VALUES (41, 'Lepuh kecil pada tangan dan kaki');
INSERT INTO `gejala` VALUES (42, 'Kulit bersisik');
INSERT INTO `gejala` VALUES (43, 'Gatal intens di area tertentu');
INSERT INTO `gejala` VALUES (44, 'Lesi berbentuk koin');
INSERT INTO `gejala` VALUES (45, 'Pembengkakan di kaki');
INSERT INTO `gejala` VALUES (46, 'Kulit terasa tegang');
INSERT INTO `gejala` VALUES (47, 'Ruam yang menyebar cepat');
INSERT INTO `gejala` VALUES (48, 'Demam');
INSERT INTO `gejala` VALUES (49, 'Pembengkakan kelenjar getah bening');
INSERT INTO `gejala` VALUES (50, 'Warna kulit berubah');

-- ----------------------------
-- Table structure for konsultasi
-- ----------------------------
DROP TABLE IF EXISTS `konsultasi`;
CREATE TABLE `konsultasi`  (
  `idkonsultasi` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idkonsultasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konsultasi
-- ----------------------------
INSERT INTO `konsultasi` VALUES (6, '2024-07-05', 'saya');
INSERT INTO `konsultasi` VALUES (7, '2024-07-11', 'Orang');
INSERT INTO `konsultasi` VALUES (8, '2024-07-11', 'Orang lagi');
INSERT INTO `konsultasi` VALUES (9, '2024-07-11', 'Orang Juga');

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `idpenyakit` int NOT NULL AUTO_INCREMENT,
  `nmpenyakit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `keterangan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `solusi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  PRIMARY KEY (`idpenyakit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES (7, 'Dermatitis Atopik', 'Penyakit kulit kronis yang sering terjadi pada anak-anak dan dapat berlanjut hingga dewasa. Ditandai oleh kulit kering, gatal parah, kemerahan, lepuh kecil, dan kulit menebal.', 'Menggunakan pelembap secara teratur, Menghindari pemicu seperti alergen dan iritan, Menggunakan kortikosteroid topikal untuk mengurangi peradangan');
INSERT INTO `penyakit` VALUES (8, 'Dermatitis Kontak Iritan', 'Reaksi kulit yang terjadi akibat paparan zat iritan seperti deterjen atau bahan kimia. Gejalanya meliputi kulit merah, gatal atau terbakar, kulit kering atau pecah-pecah, dan bengkak', 'Menghindari paparan zat iritan, Menggunakan sarung tangan pelindung saat bekerja dengan bahan kimia, Mengaplikasikan krim pelembap dan kortikosteroid topikal untuk mengurangi peradangan');
INSERT INTO `penyakit` VALUES (9, 'Dermatitis Kontak Alergi', 'Reaksi alergi yang terjadi saat kulit bersentuhan dengan alergen seperti nikel, pewarna, atau lateks. Gejalanya meliputi ruam merah, lepuh berisi cairan, gatal, dan kulit mengelupas', 'Menghindari kontak dengan alergen yang diketahui, Menggunakan kortikosteroid topikal untuk mengurangi peradangan, Mengonsumsi antihistamin untuk mengurangi gatal, Menggunakan krim atau lotion pelembap');
INSERT INTO `penyakit` VALUES (10, 'Dermatitis Seboroik', 'Kondisi kulit kronis yang menyebabkan kulit berminyak, sisik kuning atau putih, kemerahan, dan gatal di kulit kepala, wajah, atau dada', 'Menggunakan sampo anti ketombe yang mengandung zinc pyrithione, selenium sulfide, atau ketoconazole, Menggunakan krim antijamur atau kortikosteroid topikal, Menjaga kebersihan kulit');
INSERT INTO `penyakit` VALUES (11, 'Dyshidrotic Eczema', 'Jenis eksim yang ditandai dengan munculnya lepuh kecil pada tangan dan kaki, kulit gatal, kulit pecah-pecah, dan kulit bersisik', 'Menghindari pemicu seperti keringat berlebih dan stres, Menggunakan kortikosteroid topikal untuk mengurangi peradangan, Mengonsumsi antihistamin untuk mengurangi gatal');
INSERT INTO `penyakit` VALUES (12, 'Neurodermatitis', 'Kondisi kulit kronis yang ditandai dengan gatal intens di area tertentu, kulit menebal, kulit kering, dan sisik', 'Menghindari menggaruk area yang gatal, Menggunakan kortikosteroid topikal untuk mengurangi peradangan, Menggunakan krim pelembap');
INSERT INTO `penyakit` VALUES (13, 'Nummular Eczema', 'Jenis eksim yang ditandai dengan lesi berbentuk koin, kulit gatal, kulit kering, dan kemerahan', 'Menggunakan kortikosteroid topikal untuk mengurangi peradangan, Menggunakan pelembap secara teratur, Menghindari pemicu seperti sabun keras dan deterjen');
INSERT INTO `penyakit` VALUES (14, 'Stasis Dermatitis', 'Kondisi yang terjadi akibat aliran darah yang buruk, biasanya di kaki, menyebabkan kemerahan, pembengkakan, kulit terasa tegang, dan kulit bersisik atau gatal.', 'Mengangkat kaki untuk meningkatkan aliran darah, Menggunakan kompres dingin untuk meredakan bengkak, Menggunakan krim kortikosteroid untuk mengurangi peradangan');
INSERT INTO `penyakit` VALUES (15, 'Eczema Herpeticum', 'Infeksi virus herpes yang terjadi pada kulit yang sudah terkena eksim, ditandai dengan ruam yang menyebar cepat, lepuh berisi cairan, demam, dan pembengkakan kelenjar getah bening', 'Menggunakan obat antivirus seperti acyclovir, Menggunakan krim pelembap untuk mencegah kekeringan, Menghindari kontak dengan orang lain untuk mencegah penyebaran');
INSERT INTO `penyakit` VALUES (16, 'Lichen Simplex Chronicus', 'Kondisi kulit kronis yang ditandai dengan gatal kronis, kulit menebal, kulit bersisik, dan perubahan warna kulit', 'Menghindari menggaruk area yang terkena, Menggunakan kortikosteroid topikal untuk mengurangi peradangan, Menggunakan krim pelembap');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `idusers` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idusers`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Administrator');
INSERT INTO `users` VALUES (3, 'pasien', 'f5c25a0082eb0748faedca1ecdcfb131', 'Pasien');
INSERT INTO `users` VALUES (4, 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 'Dokter');

SET FOREIGN_KEY_CHECKS = 1;
