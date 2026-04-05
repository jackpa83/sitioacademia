
--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `title`, `filename`, `created_at`) VALUES
(1, 'Banner', '1774919871_6c7463c23572f1ea7526.jpeg', '2026-03-30 21:17:51'),
(2, '555', '1775009106_8617f6ae694bf734b91c.jpg', '2026-03-31 22:05:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(10) NOT NULL,
  `estatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `estatus`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interes` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `nombre`, `titulo`, `contenido`, `email`, `interes`, `filename`, `created_at`) VALUES
(1, 'Jackson', 'Ingeniero en Informatica', 'dddd', 'jackson180183@gmail.com', 'ddd', '1774931470_9da565c3cd99462d4b4b.jpg', '2026-03-31 00:31:11'),
(2, 'Ing. Jackson Perez', 'Ingeniero en Informatica', 'dddd', 'jackson180183@gmail.com', 'Rugby', '1774931552_ab5220dacfa046af5302.jpg', '2026-03-31 00:32:32'),
(3, 'Jackson', 'Ingeniero en Informatica', 'dddd', 'jackson180183@gmail.com', 'Rugby', '1774931693_145213070be55aca59cb.jpg', '2026-03-31 00:34:53'),
(4, 'Lihany', 'fffff', '<ul><li>cccc</li></ul>', 'jackson180183@gmail.com', 'cccc', '1774931803_1ceef902159b76f45998.png', '2026-03-31 00:36:43'),
(5, 'Lihany', 'Ingeniero en Informaticassss', '<ul><li>ddddd</li></ul>', 'jackson180183@gmail.com', 'Rugby', '1774931848_88fa762d8c491af367b9.jpg', '2026-03-31 00:37:28'),
(6, 'Ing. Jackson Perez', 'Ingeniero en Informatica', '<p><strong>Creador de Contenido</strong></p>', 'jackson180183@gmail.com', 'Rugby', '1774931991_324c7ca5fc9b82e3055b.jpg', '2026-03-31 00:39:51'),
(7, 'Ing. Jackson Perez', 'Ingeniero en Informaticassss', '<ol><li>wwww</li><li>w</li><li>w</li><li>w</li><li>w</li><li>w</li><li>w</li></ol>', 'jackson180183@gmail.com', 'ddd', '1774935688_38d69bf89f6266e82241.jpg', '2026-03-31 01:41:28'),
(8, 'Lihany', 'Ingeniero en Informaticassss', '<ul><li>wwwwwwwwwwwwwwww</li><li>222222222222222222222</li><li>eeeeeeeeeeeeeeeeeeeeee</li><li>ddddddddddddddddddddddddd</li><li>dddddddddddddddddddddddddd</li></ul>', 'jackson180183@gmail.com', 'sss', '1774935827_c057f81d41ec3e77d69e.jpg', '2026-03-31 01:43:47'),
(9, 'Jackson', 'dddd', '<ul><li>dddd</li><li>d</li><li>d</li><li>d</li><li>d</li></ul>', 'jackson180183@gmail.com', 'sss', '1774983376_1dd167920a8360b940c8.jpg', '2026-03-31 14:56:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `title`, `filename`, `created_at`) VALUES
(1, 'Logo Inicial', '1774843629_0091968e2598e5652a74.png', '2026-03-30 00:07:09'),
(2, 'Banner', '1774846040_42bfdfa0fe8d0f037be5.jpg', '2026-03-30 00:47:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `l_somos`
--

CREATE TABLE `l_somos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `l_somos`
--

INSERT INTO `l_somos` (`id`, `title`, `filename`, `created_at`) VALUES
(1, 'Logo Nuevo', '1774886435_673f59a0594fddbc9803.png', '2026-03-30 12:00:35'),
(2, 'Error', '1774886532_0741b73688af413c4d03.png', '2026-03-30 12:02:12'),
(3, 'Nuevo logo', '1774919104_1e9fa6dc7ab0f519f072.png', '2026-03-30 21:05:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id_niveles` int(10) NOT NULL,
  `niveles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_niveles`, `niveles`) VALUES
(1, 'administrador'),
(2, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `key_niveles` int(11) DEFAULT NULL,
  `key_estatus` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `key_niveles`, `key_estatus`, `created_at`) VALUES
(1, 'Jackson', 'admin@gmail.com', '$2y$10$p9xWKz/F3u3B2XA0ccyJw.Ld627jzWpK1iS5vwyzjY2iinmKjigOW', 1, 1, '2026-03-31 18:16:51'),
(2, 'Lihany', 'usuario@gmail.com', '$2y$10$GmMDVvyF8dX3RwkE1/214.BG.FFpz6S/pgTpAKU3Tj2IRdmflC5Se', 2, 1, '2026-03-31 21:33:09'),
(3, 'usuario', 'usuario@gmail.com', '$2y$10$HdpWnitcaU.SVNj7Xb2m.uPb6xig/mS1tsM0E2pwCozMGDd3B7Xjm', 2, 1, '2026-04-01 13:35:04'),
(4, 'Emnanuel', 'emma@gmail.com', '$2y$10$2hujxpKJ0UfpmgRNNMhBSOZByp8mU47zQVqNPmAfLCKEXXiQnh4ES', 2, 1, '2026-04-01 13:37:14'),
(5, 'sdfsfsdf', 'lbolivar@gmail.com', '$2y$10$UggsFZmeNqJPUfFpaS8YReijXFuty8iAxx7liMelFOrSSmQO0Wo.a', 2, 1, '2026-04-01 13:38:19'),
(6, 'Lihany', 'jacksonw@gmail.com', '$2y$10$W8rRGvXSyqvBzMEQaVcN3ea66Scle8dpzXPDMt1CeTsIB6crt4LYa', 2, 1, '2026-04-01 16:55:04'),
(7, 'Lihanyw', 'admwin@gmail.com', '$2y$10$737BMNq2OPtM0sT02KcWxuGXK8778triRbAPn0woomi/xlh2EwDSi', 2, 1, '2026-04-01 16:57:17'),
(8, 'Jackson', 'jackson18sss0183@gmail.com', '$2y$10$Q8bGQ0z8YlHupk6j3nyA0.iChy6Z.Wy6lXCfxLBGLVzp5uOw.yeES', 1, 1, '2026-04-01 16:58:01'),
(9, 'Ing. Jackson Perez', 'awwwdmin@gmail.com', '$2y$10$pCRF68UAxrNihheQKtR94u4T7lpF8wqNoDWPQx9rL5mmjvER5uaFu', 2, 1, '2026-04-01 16:59:12'),
(10, 'Jackson', 'wewe@gmail.com', '$2y$10$H9BUpkTxRItwZDPvt2hmaOcqn6mZHJ9fJGKQ9j10kPQXnpS.ft29S', 2, 1, '2026-04-01 17:00:22'),
(11, 'Jackson', 'adwwmin@gmail.com', '$2y$10$fD1JMshFL4a9uJb85QGi7evYyF90Tsj/d5R1CKbAg/6zbiHKaLpiO', 2, 1, '2026-04-01 17:04:02'),
(12, 'Jackson', 'jackson122280183@gmail.com', '$2y$10$wa9iBxF1kvCFURchlpPr5OacmJaHX196I4HY/lMFEJUze48EQPxHu', 2, 1, '2026-04-01 17:26:15'),
(13, 'Jackson', 'jacwwwkson180183@gmail.com', '$2y$10$JNqGQJXU1ojO4yY3UzVcZ.gT1MtpwX3aka1KZN8Dj6v/E1UmgKF5.', 2, 1, '2026-04-01 17:27:05'),
(14, 'Jackson', 'admi2222n@gmail.com', '$2y$10$qsVJatcKzgQ6CZLF2nlgU.SXlBssYg8E4GfrEFi0zVHD3sYTcZqWW', 1, 1, '2026-04-01 17:28:35'),
(15, 'Ing. Jackson Perez', 'admin@gmail.comeeee', '$2y$10$YUok21kpPDXkbudBE2KnhuRXCa5Xlavjjs.w3jeY8ZteYxK25YMDC', 2, 1, '2026-04-01 17:29:14'),
(16, 'Jackswwwon', 'jacksqqqon180183@gmail.com', '$2y$10$FUqlviPfFu.6C4T.olSl7.gNhQNBElBNOJT5c2jZ/jF9SGI5D4iAK', 2, 1, '2026-04-01 17:30:52'),
(17, 'Jackson', 'a22dmin@gmail.com', '$2y$10$qmFOa12DkJOE4O1T4o/O8.l5qBxl5dJRlXUklEoUTM7nNWvNDDn12', 1, 1, '2026-04-01 18:08:38'),
(18, 'Jackson', '232323@gmail.com', '$2y$10$Y/G07Wcb8KvFYE95KZN8J.pFt.pGfBpbpeqobdFK9r44bKxLluJu2', 2, 1, '2026-04-01 18:09:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`),
  ADD UNIQUE KEY `estatus` (`estatus`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `l_somos`
--
ALTER TABLE `l_somos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_niveles`),
  ADD UNIQUE KEY `niveles` (`niveles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `l_somos`
--
ALTER TABLE `l_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_niveles` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
