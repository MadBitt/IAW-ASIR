-- Tota la informació de cadascuna de les taules
SELECT * FROM articulo;
SELECT * FROM articulo_factura;
SELECT * FROM cliente;
SELECT * FROM factura;

-- Accedeix a camps de la taula article ordenats ascendentment:
SELECT idArticulo, descripcion FROM articulo
ORDER BY precio;

-- Accedeix a camps de la taula ARTICLE ordenats descendentment:
SELECT * FROM articulo
ORDER BY precio DESC; 

-- Visualitza l'identificador d'article de tots els articles que hi ha inclosos en la factura amb identificador 1:
SELECT Articulo_idArticulo FROM articulo_factura
WHERE Factura_idFactura = 1;

-- Visualitza descripció i preu de l'article amb un preu major:
SELECT Descripcion, Precio FROM articulo
WHERE Precio = (SELECT MAX(Precio) FROM articulo);

-- Visualitza la informació de l'article amb identificador el major de tots els que hi ha en la factura amb identificador 1:
SELECT * FROM articulo
WHERE idArticulo = (SELECT MAX(Articulo_idArticulo) FROM articulo_factura
WHERE Factura_idFactura = 1);

-- Visualitza tota la informació de les taules Factura y Article_factura:
SELECT * FROM FACTURA FAC, ARTICULO_FACTURA AF
WHERE FAC.idfactura=AF.factura_idfactura;