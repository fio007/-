<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
  <table border="1">
    <tr bgcolor="gray">
      <th>N</th>
      <th>Title</th>
      <th>Author</th>
      <th>Price</th>
    </tr>
    <xsl:for-each select="books/book">
      <tr>
        <td><xsl:value-of select="@id"/></td>
        <td><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="author"/></td>
        <td align="right"><xsl:value-of select="price"/></td>
      </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

