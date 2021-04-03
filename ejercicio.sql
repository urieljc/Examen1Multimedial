SELECT N.SIGLA,(SUM(CASE WHEN P.DEPARTAMENTO ='01' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='01' THEN 1 ELSE 0 END )) CH,
(SUM(CASE WHEN P.DEPARTAMENTO ='02' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='02' THEN 1 ELSE 0 END )) LP,
(SUM(CASE WHEN P.DEPARTAMENTO ='03' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='03' THEN 1 ELSE 0 END )) CB,
(SUM(CASE WHEN P.DEPARTAMENTO ='04' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='04' THEN 1 ELSE 0 END )) oru,
(SUM(CASE WHEN P.DEPARTAMENTO ='05' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='05' THEN 1 ELSE 0 END )) PT,
(SUM(CASE WHEN P.DEPARTAMENTO ='06' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='06' THEN 1 ELSE 0 END )) TJ,
(SUM(CASE WHEN P.DEPARTAMENTO ='07' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='07' THEN 1 ELSE 0 END )) SC,
(SUM(CASE WHEN P.DEPARTAMENTO ='08' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='08' THEN 1 ELSE 0 END )) BE,
(SUM(CASE WHEN P.DEPARTAMENTO ='09' THEN N.NotaFinal ELSE 0 END )) /(SUM(CASE WHEN P.DEPARTAMENTO ='09' THEN 1 ELSE 0 END )) PD
 FROM PERSONA P INNER JOIN NOTAS N ON P.CI=N.CI GROUP BY N.SIGLA